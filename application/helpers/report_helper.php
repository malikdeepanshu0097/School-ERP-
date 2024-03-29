<?php

header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


if (!function_exists('get_enrollment')) {

    function get_enrollment($student_id, $academic_year_id) {
        $ci = & get_instance();
        $ci->db->select('E.*');
        $ci->db->from('enrollments AS E');
        $ci->db->where('E.student_id', $student_id);
        $ci->db->where('E.academic_year_id', $academic_year_id);
        return $ci->db->get()->row();
    }

}

if (!function_exists('get_student_monthly_attendance')) {

 function get_student_monthly_attendance($student_id, $academic_year_id, $class_id, $section_id, $month, $days) {

        $fields = '';

        for ($i = 1; $i <= $days; $i++) {
            if ($i == $days) {
                $fields .= 'SA.day_' . $i;
            } else {
                $fields .= 'SA.day_' . $i . ',';
            }
        }

        $ci = & get_instance();
        $ci->db->select($fields);
        $ci->db->from('student_attendances AS SA');
        $ci->db->where('SA.student_id', $student_id);
        $ci->db->where('SA.academic_year_id', $academic_year_id);
        $ci->db->where('SA.class_id', $class_id);
        $ci->db->where('SA.section_id', $section_id);
        $ci->db->where('SA.month', $month);
        return $ci->db->get()->row();
    }

}
if (!function_exists('get_student_info')) {

 function get_student_info($student_id,$key, $name,$rno,$phone,$preadd,$peradd,$gender,$bgroup,$religion,$dob,$photo,$other_info,$hmem,$discount,  $gname, $gphone, $gpreadd, $gperadd, $gprofession,  $grelation ) {

    
  
     
      $gwork= " $gname, $gphone, $gprofession,$gpreadd,$gperadd ,$grelation ";
     $work=" $name ,$rno , $phone ,$preadd , $peradd , $gender,$bgroup , $religion, $dob,$photo, $other_info,$hmem,$discount" ;
     $ci = & get_instance();
   
        $ci->db->select($work);
        $ci->db->from(' students AS S');
        $ci->db->where('S.id', $student_id);
     
        return $ci->db->get()->row();
    }

}
if (!function_exists('get_guardian_info')) {

 function get_guardian_info($student_id,$key ,$gname, $gphone, $gpreadd, $gperadd, $gprofession,  $grelation ) {

  
     
      $gwork= " $gname, $gphone, $gprofession,$gpreadd,$gperadd ,$grelation ";
     $ci = & get_instance();
     
        $ci->db->select($gwork);
        $ci->db->from(' guardians AS G');
        $ci->db->where('G.id', $key);
       
     
        return $ci->db->get()->row();
    }
}

if (!function_exists('get_guardian_id')) {

 function get_guardian_id($student_id) {


     $ci = & get_instance();
        $ci->db->select('guardian_id');
        $ci->db->from(' students AS SA');
        $ci->db->where('SA.id', $student_id);
     
     
        return $ci->db->get()->row();
    }

}

if (!function_exists('get_teacher_monthly_attendance')) {

    function get_teacher_monthly_attendance($teacher_id, $academic_year_id, $month, $days) {

        $fields = '';

        for ($i = 1; $i <= $days; $i++) {
            if ($i == $days) {
                $fields .= 'TA.day_' . $i;
            } else {
                $fields .= 'TA.day_' . $i . ',';
            }
        }

        $ci = & get_instance();
        $ci->db->select($fields);
        $ci->db->from('teacher_attendances AS TA');
        $ci->db->where('TA.teacher_id', $teacher_id);
        $ci->db->where('TA.academic_year_id', $academic_year_id);
        $ci->db->where('TA.month', $month);
        return $ci->db->get()->row();
    }

}


if (!function_exists('get_employee_monthly_attendance')) {

    function get_employee_monthly_attendance($employee_id, $academic_year_id, $month, $days) {

        $fields = '';

        for ($i = 1; $i <= $days; $i++) {
            if ($i == $days) {
                $fields .= 'EA.day_' . $i;
            } else {
                $fields .= 'EA.day_' . $i . ',';
            }
        }

        $ci = & get_instance();
        $ci->db->select($fields);
        $ci->db->from('employee_attendances AS EA');
        $ci->db->where('EA.employee_id', $employee_id);
        $ci->db->where('EA.academic_year_id', $academic_year_id);
        $ci->db->where('EA.month', $month);
        return $ci->db->get()->row();
    }

}





