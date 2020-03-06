<?php

  date_default_timezone_set('Asia/Tokyo');

class Calender {
  public $today;
  public $title;
  public $prevMonth;
  public $thisMonth;
  public $nextMonth;
  public $ym;
  public $timestamp;
  public $weeks;
  public function __construct() {
    if(isset($_GET['ym'])) {
      $ym = $_GET['ym'];
    } else {
      $ym = date('Y-m');
    }
    $timestamp = strtotime($ym . '-01');
    if($timestamp === false) {
      $ym = date('Y-m');
      $timestamp = strtotime($ym . '-01');
    }
   
    $this->today = $this->today();
    echo $today;
    
    echo $title;
    $this->thisMonth = new DateTime($ym);
    // $this->thisMonth = $this->ym;
    $this->title = $this->thisMonthTitle();
    echo $thisMonth;
    $this->prevMonth = $this->prevMonth();
    $this->nextMonth = $this->nextMonth();
    echo $nextMonth;
  }

  public function today() {
    $now = date('Y-m-j');
    return $now;
  }

  public function thisMonthTitle() {
    return $this->thisMonth->format('Y年m月');
  }

  public function prevMonth() {
    $month = clone $this->thisMonth;
    // $this->thisMonth->modify('-1 month')->format('Y-m');
    return $month->modify('-1 month')->format('Y-m');
  }

  public function thisMonth() {
    $thisM = date('Y-m', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
    return $thisM;
  }

  public function nextMonth() {
    $month = clone $this->thisMonth;
    // $this->thisMonth->modify('+1 month')->format('Y-m');
    return $month->modify('+1 month')->format('Y-m');
  }

  

  public function days() {
    $day_count = date('t', $timestamp);

    $youbi = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

    $weeks = [];
    $week = '';

    $dayOfWeek = date('Y-m-j', mktime(0, 0, 0, date('m', $timestamp) - 1, 1, date('Y', $timestamp)));

    $week .= str_repeat('<td></td>', $youbi);

    for( $day = 1; $day <= $day_count; $day++, $youbi++) {

      $date = $ym . '-' . $day;

      if($today == $date) {
        $week .= sprintf('<td class="today">%d' , $day);
      } else {
        $week .= sprintf('<td>%d' , $day);
      }
      $week .= '</td>';

      if($youbi % 7 == 6 || $day == $day_count) {
        if($day == $day_count) {
          $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        $week = '';
      }
    }
  }
}
  
  
  

  
  



  

  











