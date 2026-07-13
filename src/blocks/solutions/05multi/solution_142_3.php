<?
$arr = [
    '2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
    '2019-12-30'=> ['name5', 'name6', 'name7'],
    '2019-12-31'=> ['name8', 'name9'],
];
$res = [];
foreach ($arr as $key => $events) {
    foreach ($events as $event) {
        $res[] = [];
        $res[count($res)-1]['date'] = $key;
        $res[count($res)-1]['event'] = $event;
    }
}

var_dump($res);
?>