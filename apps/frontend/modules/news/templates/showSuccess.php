<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $jelvix_news->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $jelvix_news->getTitle() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $jelvix_news->getLogo() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $jelvix_news->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $jelvix_news->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('news/edit?id='.$jelvix_news->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('news/index') ?>">List</a>
