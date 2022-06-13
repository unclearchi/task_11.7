<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблицы PHP</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>

    <h1 align="center">Таблицы истинности и сравнений PHP</h1>

    <table align="center">
        <caption>Таблица истинности PHP</caption>

        <?php $a = 0; $b = 0;?>
        <tr>
            <td><strong>A</strong></td>
            <td><strong>B</strong></td>
            <td><strong>!A</strong></td>
            <td><strong>A || B</strong></td>
            <td><strong>A && B</strong></td>
            <td><strong>A xor B</strong></td>
        </tr>
        
        <tr>
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo $b; ?></td>
            <td><?php echo var_dump(!$a);?></td>
            <td><?php echo var_dump($a || $b); ?></td>
            <td><?php echo var_dump($a && $b); ?></td>
            <td><?php echo var_dump($a xor $b); ?></td>
        </tr>
        
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo ++$b; ?></td>
            <td><?php echo var_dump(!$a); ?></td>
            <td><?php echo var_dump($a || $b); ?></td>
            <td><?php echo var_dump($a && $b); ?></td>
            <td><?php echo var_dump($a xor $b); ?></td>
        </tr>
        
        <tr>
            <td><?php echo ++$a; ?></td>
            <td><?php echo --$b; ?></td>
            <td><?php echo var_dump(!$a); ?></td>
            <td><?php echo var_dump($a || $b); ?></td>
            <td><?php echo var_dump($a && $b); ?></td>
            <td><?php echo var_dump($a xor $b); ?></td>
        </tr>
        
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo ++$b; ?></td>
            <td><?php echo var_dump(!$a); ?></td>
            <td><?php echo var_dump($a || $b); ?></td>
            <td><?php echo var_dump($a && $b); ?></td>
            <td><?php echo var_dump($a xor $b); ?></td>
        </tr>
    </table>

    <table align="center">
        <caption>Гибкое сравнение в PHP</caption>
        
        <tr>
            <td><strong></strong></td>
            <td><strong>true</strong></td>
            <td><strong>false</strong></td>
            <td><strong>1</strong></td>
            <td><strong>0</strong></td>
            <td><strong>-1</strong></td>
            <td><strong>"1"</strong></td>
            <td><strong>null</strong></td>
            <td><strong>"php"</strong></td>
        </tr>
        
        <tr>
            <td><strong>true</strong></td>
            <td><?php echo var_dump(true==true);?></td>
            <td><?php echo var_dump(true==false);?></td>
            <td><?php echo var_dump(true==1);?></td>
            <td><?php echo var_dump(true==0);?></td>
            <td><?php echo var_dump(true==-1);?></td>
            <td><?php echo var_dump(true=="1");?></td>
            <td><?php echo var_dump(true==null);?></td>
            <td><?php echo var_dump(true=="php");?></td>

        </tr>
        
        <tr>
            <td><strong>false</strong></td>
            <td><?php echo var_dump(false==true);?></td>
            <td><?php echo var_dump(false==false);?></td>
            <td><?php echo var_dump(false==1);?></td>
            <td><?php echo var_dump(false==0);?></td>
            <td><?php echo var_dump(false==-1);?></td>
            <td><?php echo var_dump(false=="1");?></td>
            <td><?php echo var_dump(false==null);?></td>
            <td><?php echo var_dump(false=="php");?></td>

        </tr>
        
        <tr>
            <td><strong>1</strong></td>
            <td><?php echo var_dump(1==true);?></td>
            <td><?php echo var_dump(1==false);?></td>
            <td><?php echo var_dump(1==1);?></td>
            <td><?php echo var_dump(1==0);?></td>
            <td><?php echo var_dump(1==-1);?></td>
            <td><?php echo var_dump(1=="1");?></td>
            <td><?php echo var_dump(1==null);?></td>
            <td><?php echo var_dump(1=="php");?></td>

        </tr>
        
        <tr>
            <td><strong>0</strong></td>
            <td><?php echo var_dump(0==true);?></td>
            <td><?php echo var_dump(0==false);?></td>
            <td><?php echo var_dump(0==1);?></td>
            <td><?php echo var_dump(0==0);?></td>
            <td><?php echo var_dump(0==-1);?></td>
            <td><?php echo var_dump(0=="1");?></td>
            <td><?php echo var_dump(0==null);?></td>
            <td><?php echo var_dump(0=="php");?></td>

        </tr>
        
        <tr>
            <td><strong>-1</strong></td>
            <td><?php echo var_dump(-1==true);?></td>
            <td><?php echo var_dump(-1==false);?></td>
            <td><?php echo var_dump(-1==1);?></td>
            <td><?php echo var_dump(-1==0);?></td>
            <td><?php echo var_dump(-1==-1);?></td>
            <td><?php echo var_dump(-1=="1");?></td>
            <td><?php echo var_dump(-1==null);?></td>
            <td><?php echo var_dump(-1=="php");?></td>
        </tr>
        
        <tr>
            <td><strong>"1"</strong></td>
            <td><?php echo var_dump("1"==true);?></td>
            <td><?php echo var_dump("1"==false);?></td>
            <td><?php echo var_dump("1"==1);?></td>
            <td><?php echo var_dump("1"==0);?></td>
            <td><?php echo var_dump("1"==-1);?></td>
            <td><?php echo var_dump("1"=="1");?></td>
            <td><?php echo var_dump("1"==null);?></td>
            <td><?php echo var_dump("1"=="php");?></td>

        </tr>
        
        <tr>
            <td><strong>null</strong></td>
            <td><?php echo var_dump(null==true);?></td>
            <td><?php echo var_dump(null==false);?></td>
            <td><?php echo var_dump(null==1);?></td>
            <td><?php echo var_dump(null==0);?></td>
            <td><?php echo var_dump(null==-1);?></td>
            <td><?php echo var_dump(null=="1");?></td>
            <td><?php echo var_dump(null==null);?></td>
            <td><?php echo var_dump(null=="php");?></td>

        </tr>
        
        <tr>
            <td><strong>"php"</strong></td>
            <td><?php echo var_dump("php"==true);?></td>
            <td><?php echo var_dump("php"==false);?></td>
            <td><?php echo var_dump("php"==1);?></td>
            <td><?php echo var_dump("php"==0);?></td>
            <td><?php echo var_dump("php"==-1);?></td>
            <td><?php echo var_dump("php"=="1");?></td>
            <td><?php echo var_dump("php"==null);?></td>
            <td><?php echo var_dump("php"=="php");?></td>

        </tr>
    </table>
    
    <table align="center">
        <caption >Жесткое сравнение в PHP</caption>
        
        <tr>
            <td><strong></strong></td>
            <td><strong>true</strong></td>
            <td><strong>false</strong></td>
            <td><strong>1</strong></td>
            <td><strong>0</strong></td>
            <td><strong>-1</strong></td>
            <td><strong>"1"</strong></td>
            <td><strong>null</strong></td>
            <td><strong>"php"</strong></td>
        </tr>
        
        <tr>
            <td><strong>true</strong></td>
            <td><?php echo var_dump(true===true);?></td>
            <td><?php echo var_dump(true===false);?></td>
            <td><?php echo var_dump(true===1);?></td>
            <td><?php echo var_dump(true===0);?></td>
            <td><?php echo var_dump(true===-1);?></td>
            <td><?php echo var_dump(true==="1");?></td>
            <td><?php echo var_dump(true===null);?></td>
            <td><?php echo var_dump(true==="php");?></td>

        </tr>
        
        <tr>
            <td><strong>false</strong></td>
            <td><?php echo var_dump(false===true);?></td>
            <td><?php echo var_dump(false===false);?></td>
            <td><?php echo var_dump(false===1);?></td>
            <td><?php echo var_dump(false===0);?></td>
            <td><?php echo var_dump(false===-1);?></td>
            <td><?php echo var_dump(false==="1");?></td>
            <td><?php echo var_dump(false===null);?></td>
            <td><?php echo var_dump(false==="php");?></td>

        </tr>
        
        <tr>
            <td><strong>1</strong></td>
            <td><?php echo var_dump(1===true);?></td>
            <td><?php echo var_dump(1===false);?></td>
            <td><?php echo var_dump(1===1);?></td>
            <td><?php echo var_dump(1===0);?></td>
            <td><?php echo var_dump(1===-1);?></td>
            <td><?php echo var_dump(1==="1");?></td>
            <td><?php echo var_dump(1===null);?></td>
            <td><?php echo var_dump(1==="php");?></td>

        </tr>
        
        <tr>
            <td><strong>0</strong></td>
            <td><?php echo var_dump(0===true);?></td>
            <td><?php echo var_dump(0===false);?></td>
            <td><?php echo var_dump(0===1);?></td>
            <td><?php echo var_dump(0===0);?></td>
            <td><?php echo var_dump(0===-1);?></td>
            <td><?php echo var_dump(0==="1");?></td>
            <td><?php echo var_dump(0===null);?></td>
            <td><?php echo var_dump(0==="php");?></td>

        </tr>
        
        <tr>
            <td><strong>-1</strong></td>
            <td><?php echo var_dump(-1===true);?></td>
            <td><?php echo var_dump(-1===false);?></td>
            <td><?php echo var_dump(-1===1);?></td>
            <td><?php echo var_dump(-1===0);?></td>
            <td><?php echo var_dump(-1===-1);?></td>
            <td><?php echo var_dump(-1==="1");?></td>
            <td><?php echo var_dump(-1===null);?></td>
            <td><?php echo var_dump(-1==="php");?></td>
        </tr>
        
        <tr>
            <td><strong>"1"</strong></td>
            <td><?php echo var_dump("1"===true);?></td>
            <td><?php echo var_dump("1"===false);?></td>
            <td><?php echo var_dump("1"===1);?></td>
            <td><?php echo var_dump("1"===0);?></td>
            <td><?php echo var_dump("1"===-1);?></td>
            <td><?php echo var_dump("1"==="1");?></td>
            <td><?php echo var_dump("1"===null);?></td>
            <td><?php echo var_dump("1"==="php");?></td>

        </tr>
        
        <tr>
            <td><strong>null</strong></td>
            <td><?php echo var_dump(null===true);?></td>
            <td><?php echo var_dump(null===false);?></td>
            <td><?php echo var_dump(null===1);?></td>
            <td><?php echo var_dump(null===0);?></td>
            <td><?php echo var_dump(null===-1);?></td>
            <td><?php echo var_dump(null==="1");?></td>
            <td><?php echo var_dump(null===null);?></td>
            <td><?php echo var_dump(null==="php");?></td>

        </tr>
        
        <tr>
            <td><strong>"php"</strong></td>
            <td><?php echo var_dump("php"===true);?></td>
            <td><?php echo var_dump("php"===false);?></td>
            <td><?php echo var_dump("php"===1);?></td>
            <td><?php echo var_dump("php"===0);?></td>
            <td><?php echo var_dump("php"===-1);?></td>
            <td><?php echo var_dump("php"==="1");?></td>
            <td><?php echo var_dump("php"===null);?></td>
            <td><?php echo var_dump("php"==="php");?></td>

        </tr>
    </table>
    
    <div align="center">
        <h2>Выводы:</h2>
        <ul>
            <li>В языке PHP слабая неявная динамическая типизация, то есть тип переменной определяется во время выполнения программы, а не во время компиляции,
                 в зависимости от ее значения и может меняться.</li>
            <li>При гибком сравнении происходит приведение типов, если переменные были разных типов.</li>
            <li>При жестком сравнении истинным значение будет только в том случае, если переменные имеют один тип и одно
                значение.</li>
        </ul>
    </div>
</body>

</html>