<?php

class Page
{
  private string $level;
  private string $mode;
  private string $style;
  private string $title;
  private string $active1;
  private string $active2;
  private string $active3;
  private string $active4;
  private string $seo;

  public function __construct(string $level, string $mode, string $style, string $title, string $active1, string $active2, string $active3, string $active4, string $seo)
  {
    $this->level = $level;
    $this->mode = $mode;
    $this->style = $style;
    $this->title = $title;
    $this->active1 = $active1;
    $this->active2 = $active2;
    $this->active3 = $active3;
    $this->active4 = $active4;
    $this->seo = $seo;
  }

  public function getLevel()
  {
    return $this->level;
  }

  public function setLevel($level)
  {
    $this->level = $level;

    return $this;
  }

  public function getMode()
  {
    return $this->mode;
  }

  public function setMode($mode)
  {
    $this->mode = $mode;

    return $this;
  }

  public function getStyle()
  {
    return $this->style;
  }

  public function setStyle($style)
  {
    $this->style = $style;

    return $this;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  public function getActive1()
  {
    return $this->active1;
  }

  public function setActive1($active1)
  {
    $this->active1 = $active1;

    return $this;
  }

  public function getActive2()
  {
    return $this->active2;
  }

  public function setActive2($active2)
  {
    $this->active2 = $active2;

    return $this;
  }

  public function getActive3()
  {
    return $this->active3;
  }

  public function setActive3($active3)
  {
    $this->active3 = $active3;

    return $this;
  }

  public function getActive4()
  {
    return $this->active4;
  }

  public function setActive4($active4)
  {
    $this->active4 = $active4;

    return $this;
  }

  public function getSeo()
  {
    return $this->seo;
  }

  public function setSeo($seo)
  {
    $this->seo = $seo;

    return $this;
  }
}
