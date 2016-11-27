<?php

class intructor_view
{
  function __construct()
  {

  }
  public function list_course(array $detail)
  {
    for ($i=0; $i <count($detail) ; $i++) {
      echo "
      <tr>
        <td>{$detail[$i]['course_name']}</td>
        <td>{$detail[$i]['price']}</td>
        <td>{$detail[$i]['rating']}</td>
      </tr>";
    }

  }
  public function detail_question(array $detail)
  {
    $id_answer = (int)$detail['id_answer'] +1 ;
    echo "
    <img src=\"../../frontend/store/pictures/{$detail['name']}\">
    <input type=\"hidden\" name=\"id_author\" value=\"{$detail['id_author']}\">
    <div class\"form-grou\">
      <label for=\"\">คำตอบที่ถูก</label>
      <input type=\"text\" name=\"id_answer\" class=\"form-control\" value=\"{$id_answer}\">
    </div>
    <div class=\"form-group\">
      <label for=\"\">ข้อที่1</label>
      <input type=\"text\" name=\"answer1\"class=\"form-control\" value=\"{$detail['answer1']}\">
    </div>
    <div class=\"form-group\">
      <label for=\"\">ข้อที่2</label>
      <input type=\"text\" name=\"answer2\"class=\"form-control\" value=\"{$detail['answer2']}\">
    </div>
    <div class=\"form-group\">
      <label for=\"\">ข้อที่3</label>
      <input type=\"text\" name=\"answer3\"class=\"form-control\" value=\"{$detail['answer3']}\">
    </div>
    <div class=\"form-group\">
      <label for=\"\">ข้อที่4</label>
      <input type=\"text\" name=\"answer4\"class=\"form-control\" value=\"{$detail['answer4']}\">
    </div>
    <div class=\"form-group\">
      <label for=\"\">คะแนน</label>
      <input type=\"text\" name=\"score\"class=\"form-control\" value=\"{$detail['score']}\">
    </div>
<button type=\"submit\" name=\"submit\">แก้ไข</button>

    ";

  }
  public function detail_question_false()
  {
    echo "เกิดปัญหาระหว่างการดูรายละเอียดโจทย์ของคุณ";
  }
  public function del_question_true()
  {
    echo "ลบโจทย์ข้อนี้แล้ว";
  }
  public function del_question_false()
  {
    echo "เกิดปัญหาระหว่างการลบ";
  }
  public function question_true()
  {
    echo "สร้างโจทย์สำเร็จ";
  }
  public function question_false()
  {
    echo "เกิดปัญหาการสร้างโจทย์ โปรดลองใหม่ภายหลัง";
  }
  public function make_exam_true()
  {
    echo "เพิ่มข้อสอบสำเร็จ";
  }
  public function make_exam_false()
  {
    echo "เกิดปัญหาในการเพิ่มข้อสอบ";
  }
  public function get_list_video_course(array $detail)
  {
    for ($i=0; $i <count($detail) ; $i++) {
      echo "<div class=\"table-responsive\">
              <table class=\"table\">
                <tbody>
                     <th>
                       {$detail[$i]['description']}
                     </th>
                     <th>
                        <button id=\"del\" class=\"btn-warning\" value=\"{$detail[$i]['id_video']}\">ลบวิดีโอ</button>
                        <button id =\"detail\"class\"btn-info\" value=\"{$detail[$i]['id_video']}\">รายละเอียด</button>
                     </th>
                </tbody>
              </table>
            </div>";
    }

  }
  public function update_course_true()
  {
    echo "เพิ่มวิดีโอเรียบร้อย";
  }
  public function update_course_false()
  {
    echo "เกิดปัญหาในการเพิ่มวิดีโอ";
  }
  public function return_draft(array $draft)
  {
    echo $draft['data'];
  }
}
 ?>
