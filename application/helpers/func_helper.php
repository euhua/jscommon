<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * func helper
 * Author: jasni@mediacliq.com
 * Date: 2011-12-09
 * Note: 
 *
 */	
 
/*
* apps functions
*/

function create_form_question_today($arr){
	foreach($arr as $key=>$val)
	${$key} = $val;
	
	$str_name = 'a_' . $quiz_time;
	$str_id = 'a_' . $quiz_time;
	$str_display = '';
	$str_display .= '<div id="home_answerinput">';
	$str_display .= '<input type="text" size="12" maxlength="125" class="text_box" name="' . $str_name . '" id="' . $str_id . '" rel="' . $quiz_time . '">';
	$str_display .= '</div>';
	
	return $str_display;
}

function real_day_no($no, $date='', $start_date=''){
	$week1 = 1;
	$week2 = weekNo($date, $start_date);
	
	$diff = $week2 - $week1;
	return ($no>5) ? ($no - ($diff*2)) : $no;
}

/*
* common usage functions
*/

if ( ! function_exists('start_date'))
{
	function start_date($field='start_date')
	{
		$CI =& get_instance();
		
		$CI->db->where('setting', $field);
		$query = $CI->db->get('setting');
		
		$start_date = $query->row()->value;
		return $start_date;
	}
}

if ( ! function_exists('end_date'))
{
	function end_date($field='end_date')
	{
		$CI =& get_instance();
		
		$CI->db->where('setting', $field);
		$query = $CI->db->get('setting');
		
		$start_date = $query->row()->value;
		return $start_date;
	}
}

if ( ! function_exists('datediff'))
{
	function datediff($str_date1, $str_date2, $abs=true)
	{
		$time1 = strtotime($str_date1);
		$time2 = strtotime($str_date2);
		
		if ($abs)
		return round(abs($time1-$time2)/60/60/24);
		else
		return round(($time1-$time2)/60/60/24);
	}
}

if ( ! function_exists('timediff'))
{
	function timediff($str_date1, $str_date2, $abs=true)
	{
		$time1 = strtotime($str_date1);
		$time2 = strtotime($str_date2);
		
		if ($abs)
		return round(abs($time1-$time2));
		else
		return round(($time1-$time2));
	}
}

if ( ! function_exists('date_math'))
{
	function date_math($date, $var1='+1 day', $format='Y-m-d')
	{
		/*
		 * $date = strtotime(date("Y-m-d", strtotime($date)) . " +1 day");
		 * $date = strtotime(date("Y-m-d", strtotime($date)) . " +1 week");
		 * $date = strtotime(date("Y-m-d", strtotime($date)) . " +2 week");
		 * $date = strtotime(date("Y-m-d", strtotime($date)) . " +1 month");
		 * $date = strtotime(date("Y-m-d", strtotime($date)) . " +30 days");
		 */
		$newdate = strtotime (" $var1 " , strtotime ( $date ) ) ;
		$newdate = date ( $format , $newdate );

		return $newdate;
	}
}

if ( ! function_exists('convert_date'))
{
	function convert_date($str_date, $format='Y-m-d')
	{
		$time = strtotime($str_date);
		
		return date($format,$time);
	}
}

if ( ! function_exists('getLatestDateOfWeek'))
{
	/*
	* To get date of the latest day before/or Friday of the week
	*	-> to retrieve in format just add date format - follow php recognized parameter string
	*/
	function getLatestDateOfWeek($format="Y-m-d") {
		$day = date('N');
		if ($day>5) $day = 5;
		return getDateDayOfWeek($day, $format);
	}
	
}

if ( ! function_exists('getDateDayOfWeek'))
{
	/*
	* To get date of the day in week
	*	-> 1-Mon, 2-Tue, ..... , 7-Sun
	*	-> to retrieve in format just add date format - follow php recognized parameter string
	*	-> to specify week, put 1-42 (every year has 42 weeks)
	*	-> to specify year, put year number 1970-now
	*	-> e.g	: 
	*		: to get Thursday date's of this week, just call getDateDayOfWeek(4)
	* 		: to get Thursday date's on first week of this year, call getDateDayOfWeek(4,1)
	* 		: to get Thursday date's on first week of year 2010, call getDateDayOfWeek(4,1,2010)
	*	
	*/
	function getDateDayOfWeek($day, $format="Y-m-d", $week='',$year='') {
		return findDateDayOfWeek($day, $week, $year, $format);
	}
	
}

if ( ! function_exists('findDateDayOfWeek'))
{
	function findDateDayOfWeek($day, $week='',$year='', $format="Y-m-d") {
		$day = $day-1;
		if (!$week) $week = date('W');
		if (!$year) $year = date('Y');
		$startday = weekStartDate($week, $year, $format);
		return date_math($startday, "+ $day day", $format);
	}
	
}

if ( ! function_exists('weekStartDate'))
{
	function weekStartDate($week='',$year='',$format="Y-m-d") {
		if (!$week) $week = date('W');
		if (!$year) $year = date('Y');
	    $firstDayInYear=date("N",mktime(0,0,0,1,1,$year)); 
	    if ($firstDayInYear<5) 
	        $shift=-($firstDayInYear-1)*86400; 
	    else 
	        $shift=(8-$firstDayInYear)*86400; 
	    if ($week>1) $weekInSeconds=($week-1)*604800; else $weekInSeconds=0; 
	    $timestamp=mktime(date('H'),date('i'),date('s'),1,1,$year)+$weekInSeconds+$shift; 
	    return date($format,$timestamp); 
	} 
}

if ( ! function_exists('weekNo'))
{
	function weekNo($now, $start_date='', $return_day=false) {
		if (!$start_date)
		$start_date = start_date();
		
		$day_count = datediff($now, $start_date);
		
		if ($return_day) return $day_count;
		
		$week = floor($day_count/7)+1;
		return $week;
	} 
}

if ( ! function_exists('toStrictBoolean'))
{
	function toStrictBoolean ($_val, $_trueValues = array('1', 'yes', 'y', 'true'), $_forceLowercase = true)
	{
	    if (is_string($_val)) {
	        return (in_array(
	             ($_forceLowercase?strtolower($_val):$_val)
	            , $_trueValues)
	        );
	    } else {
	        return (boolean) $_val;
	    }
	}
}

if ( ! function_exists('toStrictInteger'))
{
	function toStrictInteger ($_val)
	{
	    if ($_val)
			return 1;
		else
			return 0;
	}
}

if ( ! function_exists('print_array'))
{
	function print_array($array)
	{
		echo '<pre>';
		print_r($array);
		echo '<pre>';
	}
}

if ( ! function_exists('print_array2file'))
{
	function print_array2file($filename, $array)
	{
		$handle = fopen($filename,'a');
		fwrite($handle, "<pre>");
		fwrite($handle, print_r($array, true));
		fwrite($handle, "</pre>");
		fclose($handle);
	}
}

if ( ! function_exists('trim_r'))
{
	function trim_r($array) {
		if (is_string($array)) {
			return trim($array);
		} else if (!is_array($array)) {
			return '';
		}
		$keys = array_keys($array);
		for ($i=0; $i<count($keys); $i++) {
			$key = $keys[$i];
			if ( is_array($array[$key]) ) {
				$array[$key] = trim_r($array[$key]);
			} else if ( is_string($array[$key]) ) {
				$array[$key] = trim($array[$key]);
			}
		}
		return $array;
	}
}

if ( ! function_exists('multiarray_search'))
{
	function multiarray_search($needle, $haystack, &$found=false, &$key=NULL) { 
		if (empty($needle) || empty($haystack)) { 
			return false; 
		} 
		
		if ($found) return true;
		
		foreach ($haystack as $key => $value) { 
			if (is_array($value)){
				$found = multiarray_search($needle, $value, $found);
				if ($found) return true;
			}else{
				$exists = true;
				if (is_array($needle)){
					foreach ($needle as $skey => $svalue) {
						$exists = ($exists && ($skey == $key) && ($value == $svalue)); 
					}
				}else{
					$exists = ($exists && ($value == $needle)); 
				}
				if($exists){ 
					$found = true;
					return true; 
				} 
			}
		}
		return false; 
	}
}

if ( ! function_exists('array_to_excel')) {
  function array_to_excel($array, $filename='exceloutput') {
    $headers = ''; // just creating the var for field headers to append to below
    $data = ''; // just creating the var for field data to append to below
    
	//print_array($array);
	//return false;
	
    if (count($array) == 0) {
      echo "<p>No data for that report, please use your browser's back button</p>";
      return FALSE;
    } else {
	  foreach ($array[0] as $field=>$value) {
        $headers .= '"' . $field . '"' . "\t";
      }

      foreach ($array as $row=>$fields) {
        $line = '';
        foreach($fields as $field=>$value) {                                            
          if ((!isset($value)) OR ($value == "")) {
            $value = "\t";
          } else {
            $value = str_replace("\n", " ", $value); // for stupid line breaks that mess up the spreadsheet
            $value = str_replace('"', '""', $value);
            $value = '"' . $value . '"' . "\t";
          }
          $line .= $value;
        }
        $data .= trim($line)."\n";
      }

      $data = str_replace("\r","",$data);

      header("Content-type: application/x-msdownload");
      header("Content-Disposition: attachment; filename=$filename.xls");
      echo "$headers\n$data";  
    }
  }
} 
/* End of file func_helper.php */
/* Location: ./application/helpers/func_helper.php */