<div class="container-fluid contain">
  <div class="row">
    <div class="col-6">
      <h3 id="main-header">Team management</h3><p class="font-weight-normal">is the ability of an individual or an organization to administer and coordinate a group of individuals to perform a task.</p>
        <ol class="list-group">
          <li class="list-group-item ">Be transparent</li>
          <li class="list-group-item">Keep communicating</li>
          <li class="list-group-item">Provide valuable feedback</li>
          <li class="list-group-item">Encourage collaboration</li>
          <li class="list-group-item">Trust your team to do their job</li>
        </ol>
    </div>
    <div class="col-6 overflow-auto">
      <h3 id="main-header">Teams</h3>
      <div class="list-group">
<?php
$team_qry = "SELECT * FROM team";
$team_res = mysqli_query($connection, $team_qry);
while ($row = mysqli_fetch_assoc($team_res)) {
  echo "<div class='list-group-item'>
    <h4 class='list-group-item-heading'>{$row['team_name']}</h4>
    <p class='list-group-item-text'><strong>Leader</strong>-{$row['team_leader']} <strong>Team Mail</strong>-{$row['team_email']} <br> <strong>Team ID</strong>-{$row['team_joinid']}</p>
  </div>";
}
?>

      </div>
    </div>
  </div>
</div>
