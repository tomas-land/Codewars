<style>*{background: rgb(40, 108, 148);}</style>
You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the text that should be displayed next to such an item.

Implement a function likes :: [String] -> String, which must take in input array, containing the names of people who like an item. It must return the display text as shown in the examples:
<br>
<br>
<br>
<br>
<br>

<?php
// mano sprendimai:

$names=["Tomas","Linas","Rokas","Jonas","Pijus"];
if(empty($names)){
    echo 'no one like this';

} 
if(count($names)==1){
   
    echo $names[0]." like this";

}
if(count($names)==2){
   
        echo $names[0]." and ".$names[1]." like this";
    
}
if(count($names)==3){

    echo $names[0].", ". $names[1]." and ".$names[2]." like this";
}
if(count($names)>3){

    echo $names[0].", ". $names[1]." and ". (count($names)-2) ." others like this";
}






//kiti

// '3' => "{$names[0]}, {$names[1]} and {$names[2]} like this",



function likes(array $names): string {
    switch (count($names)) {
      case 0:
        return 'no one likes this';
      case 1:
        return vsprintf('%s likes this', $names);
      case 2:
        return vsprintf('%s and %s like this', $names);
      case 3:
        return vsprintf('%s, %s and %s like this', $names);
      default:
        return sprintf('%s, %s and %d others like this', $names[0], $names[1], count($names) - 2);
    }
  }