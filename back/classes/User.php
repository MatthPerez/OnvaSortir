<?php

class User
{
  public string $name;

  public function __construct(
    string $name
  ) {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getSeniority()
  {
    require '../back/lists/members.php';
    foreach ($members as $member) {
      if ($this->name == $member['nom']) {
        $inscription = $member['inscription'];
        $day = substr($inscription, 0, 2);
        $month = substr($inscription, 3, 2);
        $year = substr($inscription, 6, 4);
        $today = strtotime(date('Y-m-d'));
        $end = strtotime(date('Y-m-d', mktime(0, 0, 0, $month, $day, $year)));
        $delta = ceil(abs($today - $end) / 86400);
        return $delta;
      }
    }
  }

  public function getDatas()
  {
    require '../back/lists/members.php';
    foreach ($members as $member) {
      if ($this->name == $member['nom']) {
        return '
        <span>
        <span>' . ucwords($member['genre']) . ',</span>
          <span>né(e) le ' . $member['birth'] . '</span>
        </span>
        <span>Inscription le ' . $member['inscription'] . '</span>
        <span><a href="https://www.google.com/maps?q=' . $member['ville'] . '" class="f-blue" target="_blank">' . $member['ville'] . '</a> (' . $member['dpt'] . ')</span>
        ';
      }
    }
  }

  public function getStatus()
  {
    require '../back/lists/members.php';
    foreach ($members as $member) {
      if ($this->name == $member['nom']) {
        return $member['status'];
      }
    }
  }

  public function getPhone()
  {
    require '../back/lists/members.php';
    foreach ($members as $member) {
      if ($this->name == $member['nom']) {
        $longPhone = '0' . substr($member['tel'], 0, 1) . ' ';
        $longPhone .= substr($member['tel'], 1, 2) . ' ';
        $longPhone .= substr($member['tel'], 3, 2) . ' ';
        $longPhone .= substr($member['tel'], 5, 2) . ' ';
        $longPhone .= substr($member['tel'], 7, 2);
        return '<a href="tel:' . $member['tel'] . '">' . $longPhone . '</a>';
      }
    }
  }

  public function getMail()
  {
    require '../back/lists/members.php';
    foreach ($members as $member) {
      if ($this->name == $member['nom']) {
        return '<a href="mailto:' . $member['mail'] . '">' . $member['mail'] . '</a>';
      }
    }
  }

  public function getPhoto()
  {
    require '../back/lists/members.php';
    foreach ($members as $member) {
      if ($this->name == $member['nom']) {
        return $member['photo'];
      }
    }
  }
}
