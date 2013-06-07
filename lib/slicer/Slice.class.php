<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vova
 * Date: 07.06.13
 * Time: 3:11
 * To change this template use File | Settings | File Templates.
 */
class Slice {
    var $_notClose = Array('img','input','meta','link','br','hr'),
        $_tags = Array();

    function __construct($source, $length){

        $this->length = $length;         #конечная длинна
        $this->charCount = 0;            #текущее количество символов
        $this->_source = explode("\n", $source);
        $this->full='';
        $this->parse();

    }

    private function parse(){

        //$source = fopen($this->_file, 'r');

        $last = false;

        //while(!feof($source) and $this->charCount <= $this->length){
        foreach($this->_source as $temp){

            //$temp = fgets($source);

            $length = strlen($temp);

            $delta  = $this->length - $this->charCount;

            if($length > $delta){

                $temp = substr($temp, 0, $delta);

                $last = true;

            }

            $this->charCount += strlen($temp);

            $close = Array();

            $newTags =  $this->checkTag($temp);

            if(count($newTags) > 0 )

                $this->_tags = array_merge($this->_tags, $newTags);


            $newCloseTag = $this->checkTag($temp, false);

            if($last){

                $slice = $this->checkUnclosed($temp);

                if(!empty($slice) and $slice > 0)

                    $temp = substr($temp,0, (-1)*$slice);


            }


            foreach($newCloseTag as $tag){

                if(in_array($tag, $this->_tags)){

                    $number = array_search($tag, $this->_tags);

                    unset($this->_tags[$number]);
                }

            }

            $this->full .= $temp;

        }

        $this->full = $this->full.'...';

        foreach(array_reverse($this->_tags) as $opentag){

            if(!in_array($opentag, $this->_notClose)){

                $this->full .= '</'.$opentag.'>';

            }
        }

    }

    private function checkUnclosed($line){

        $pattern = '/<([^(>)]+)$/';

        if(preg_match($pattern, $line, $m)){

            return strlen($m[0]);

        }

    }
    private function checkTag($line, $mode = true){

        $tags = Array();

        ($mode)?
            $pattern = '/<([^(\s|>|\/|\!|\-)]+)([^(>|<)]+)?(\/)?(>)?/':
            $pattern = '/<\/([^(\s|>|\/|\!|\-)]+)(\s+)?>/';

        if(preg_match_all($pattern, $line, $m)){

            foreach($m[1] as $value){

                $value = explode(' ', $value);

                $tags[] = strtolower($value[0]);

            }

        }

        return $tags;

    }

    public function __toString(){
        return $this->full;
    }

}