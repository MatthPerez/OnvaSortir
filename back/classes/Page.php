<?php

class Page
{
  private string $level;
  private string $mode;
  private string $style;
  private string $title;
  private string $seo;

  public function __construct(string $level, string $mode, string $style, string $title, string $seo)
  {
    $this->level = $level;
    $this->mode = $mode;
    $this->style = $style;
    $this->title = $title;
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
