<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<script>
    var result = parseFloat(prompt('Enter your result number'));
    if(result <=100 && result >=80) {
        document.write('A+');
    }else if(result <=79 && result >=70){
        document.write('A');
    }else if(result <=79 && result >=70){
        document.write('A-');
    }else if(result <=69 && result >=60){
         document.write('B');
    }else if(result <=59 && result >=50){
         document.write('C');
    }else if(result <=49 && result >=40){
         document.write('D');
    }else if(result <=39 && result >=33){
         document.write('F');
    }else {
        document.write('Invalid number, please enter 1 to 100 number');
    }
</script>
</body>
</html>