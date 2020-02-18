<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
   $shoopingList1 = array("First","second","third","fourth","five");
   $shoopingList2 = array("milk","coffee","curd","froath","cheese","First");
   // For merge two array --> array_merge()
   $shoopingList = array_merge($shoopingList1,$shoopingList2);
   print_r($shoopingList);
   var_dump($shoopingList);
   // .count is used for counting
   echo "<p>This is for counting purpose</p> \n" . count($shoopingList);
   $count = array_count_values($shoopingList);
   echo "<p>Basket count</p>";
   print_r($count);
   // To check
   if(in_array("Saurabh", $shoopingList))
   {
      print_r("Array belong to the current list");
   }
   else{
       echo "<p>Doesn't belongs to the current list.</p>";
   };
   
   array_push($shoopingList, "Saurabh");
       print_r("Yaa we got it");
       var_dump($shoopingList);
    array_slice($shoopingList, 0 , 6 , true);
     print_r($shoopingList);
     
    // For sorting
    sort($shoopingList);
    print_r($shoopingList);
    rsort($shoopingList);
    print_r($shoopingList);
    