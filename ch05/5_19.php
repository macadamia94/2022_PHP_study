<?php
// 배열은 왜 쓰는가?
// 한 공간에 많은 자료를 담기 위해서 사용을 하는 것 => 배열
// 한 공간에 하나의 자료를 담는 것 => 변수

$arr= [300, 400];
$arr2= array(100, 200);

$arr[0]= 150;

print "arr[0] : " . $arr[0] . "<br>";
print "arr[1] : " . $arr[1] . "<br>";

print "arr2[0] : " . $arr2[0] . "<br>";
print "arr2[1] : " . $arr2[1] . "<br>";

print "<br>------------------------<br>";

$keyArr= ["a" => 300, "b" => 400];

print $keyArr[0]; // 0번 값은 없기때문에 에러뜸
print $keyArr["a"]; 

print "<br>------------------------<br>";
print "<br>------------------------<br>";

$arr= array();

// $arr[0]= 10;
// $arr[1]= 20;
// $arr[2]= 30;
// $arr[3]= 40;
// $arr[4]= 50;

$val = 10;
for($i=0; $i<5; $i++) {
    $arr[$i] = $val;
    $val += 10;
}

// print "arr[0] : " . $arr[0] . "<br>";
// print "arr[1] : " . $arr[1] . "<br>";
// print "arr[2] : " . $arr[2] . "<br>";
// print "arr[3] : " . $arr[3] . "<br>";
// print "arr[4] : " . $arr[4] . "<br>";

// for($i=0; $i<5; $i++) {
//     print "arr[$i] : $arr[$i]<br>";
// }

for($i=0; $i<count($arr); $i++) {
    print "arr[$i] : $arr[$i]<br>";
}

print "<br>------------------------<br>";
print "<br>------------------------<br>";

print "mission_1 <br><br>";
 
 $arr= [4, 9, 10, 22, 100, 45];

print_r($arr);
print"<br>";

krsort($arr);
print_r($arr);
print"<br><br>";

krsort($arr);
foreach($arr as $a)
{
    echo "$a <br>"; 
}

print"<br>";
for($i=count($arr)-1; $i>=0; $i--) {
    print "arr[$i] : $arr[$i]<br>";
}

print"<br>";
$len= count($arr);
for($i=1; $i<=$len; $i++) {
    print $arr[$len - $i] . "<br>";
}

print "<br>------------------------<br>";

print "mission_2 <br><br>";

$arr= array(); // 이 배열에 최대로 넣을 수 있는 값은 5개까지

for($i=0; $i<5; $i++) {
        // 랜덤값을 먼저 뽑고 중복여부를 확인해야하기 때문에 이 위치에 있는 것임
    $val= rand(1, 8);

    $is_duplication = 0; // 0:중복X, 1:중복O 
    for($z=0; $z<count($arr); $z++) {
        if($arr[$z] === $val) {
            $is_duplication = 1;
            break; // 굳이 적지 않아도 되기는 함
        }
    }
    if($is_duplication === 1){ 
        $i--; 
    } else {
        array_push($arr, $val);
    }
}
// $z<count($arr)을 쓴 이유는 들어있는 갯수만큼만 체크하면 되기때문
print_r($arr);

print "<br>------------------------<br>";

print "mission_2_2 <br><br>";

$arr_2= array();
for($i=0; $i<5; ) {
    // 랜덤값을 먼저 뽑고 중복여부를 확인해야하기 때문에 이 위치에 있는 것임
$val= rand(1, 8);

$is_duplication = 0; // 0:중복X, 1:중복O 
for($z=0; $z<count($arr_2); $z++) {
    if($arr_2[$z] === $val) {
        $i--;
        goto first_for; // 특수한 상황이 아니면 goto문은 사용X
        }
    }
    array_push($arr_2, $val);

    first_for: $i++;
}
print_r($arr_2);

print "<br>------------------------<br>";
print "<br>------------------------<br>";

// void : return값이 없음    ex) 빈칸, return;
// 비void : return값이 있음  ex) return $result;

function sum($n1, $n2) {
    return $n1 + $n2;
}

function void_sum($n1, $n2) {
    print "sum : " . $n1 + $n2 . "<br>";
}

$n1= 10;
$n2= 20;

void_sum($n1,$n2);

$result= sum($n1,$n2); // return값이 있으면 좀 더 유연하게 활용가능
print "sum : $result <br>";
print "썸 : $result <br>";
print "sum*2 : " . ($result*2) . "<br>";