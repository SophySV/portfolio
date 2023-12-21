<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="box">
        <header>
            <h1>Математические операторы</h1>
        </header>
        <nav>
            <img src="itgenik.png" alt="">
        </nav>
        <content>
            <table>
                <tr>
                    <td>
                        <h2>Арифметические операции</h2>
                        <ul>
                            <li><span>+</span>(операция сложения)<br>
                               <input type="text" id="num1">
                               <input type="text" id="num2">
                               <input type="button" value="+" id="res1">
                               <input type="text" id="num3">
                            </li>
                            <li><span>-</span>(операция вычитания)
                                <br>
                                 <input type="text" id="num4">
                               <input type="text" id="num5">
                               <input type="button" value="-" id="res2">
                               <input type="text" id="num6">
                            </li>
                            <li><span>*</span>(операция умножения)<br>
                                 <input type="text" id="num7">
                               <input type="text" id="num8">
                               <input type="button" value="*" id="res3">
                               <input type="text" id="num9">
                            </li>
                            <li><span>/</span>(операция деления)<br>
                                 <input type="text" id="num10">
                               <input type="text" id="num11">
                               <input type="button" value="/" id="res4">
                               <input type="text" id="num12">
                            </li>
                            <li><span>%</span>(нахождение остатка от деления)<br>
                                <input type="text" id="num13">
                               <input type="text" id="num14">
                               <input type="button" value="%" id="res5">
                               <input type="text" id="num15">
                            </li>
                            <li><span>**</span> (возведение в степень)<br>
                                 <input type="text" id="num16">
                               <input type="text"  id="num17">
                               <input type="button"value="**" id="res6">
                               <input type="text"  id="num18"> 
                            </li>
                            <li><span>++</span>(инкремент)<br>
                                <input type="text"  id="num19">
                               <input type="button" value="++" id="res7">
                            </li>
                            <li><span>--</span>(дикремент)<br>
                                <input type="text" id="num22">               
                               <input type="button" value="--" id="res8">
                            </li>
                        </ul>
                    </td>
                    <td>
                        <h2>Логические операции</h2>
                        <ul>
                            <li><span>&&</span>(логическое И)<br>
                               <input type="text" id="log1" value="true">
                               <input type="text" id="log2" value="false">
                               <input type="button" value="&&" id="res9">
                               <input type="text" id="log3">
                            </li>
                            <li><span>and</span>(логическое И)<br>
                                 
                            </li>
                            <li><span>||</span>(логическое ИЛИ)<br>
                               <input type="text" id="log4" value="true">
                               <input type="text" id="log5" value="false">
                               <input type="button" value="||" id="res10">
                               <input type="text" id="log6">
                            </li>
                            <li><span>or</span>(логическое ИЛИ)<br>
                                <span class="code">$a = (true or false);</span>//true
                            </li>
                            <li><span>!</span>(логическое ОТРИЦАНИЕ)<br>
                                <span class="code">$c = !true;</span>//false
                            </li>
                            <li><span>xor</span>(логическое ОТРИЦАНИЕ)<br>
                                <span class="code">true xor true;</span>//false
                            </li>
                        </ul>
                        <img src="avatar.png" alt="" class="avatar">
                    </td>
                   
                    <td>
                        <h2>Поразрядные операции</h2>
                        <p>Поразрядные операции производятся над отдельными разрядными или битами числа. Числа рассматриваются в двоичном представлении, например, 2 в двоичном представлении 010, число 7 - 111.</p>
                        <ul>
                            <li><span>&</span>(логическое умножение)<br>
                             <form action="" method="GET"> <input type="text" name="num1" id="text"  />
                                <input type="text" name="num2" id="text"/>
                                    <input type="submit" name="Enter" id="Enter" value="&" />
                                    </form>
                                   <p> <?php 
                                        print_r($_GET['num1']&$_GET[num2])
                                         ?><p>
                              </span><br>/*Здесь число 4 в двоичной системе равно 100, а число 5 равно 101. Поразрядно умножим числа и получим (1*1, 0*0, 0 *1) = 100, то есть число 4 в десятичном формате.*/
                            </li>
                            <li><span>|</span>(логическое сложение)<br> 
                            <form action="" method="GET"> <input type="text" name="num3" id="text"  />
                                <input type="text" name="num4" id="text"/>
                                    <input type="submit" name="Enter" id="Enter" value="|" />
                                    </form>
                                   <p> <?php 
                                        print_r($_GET['num3']|$_GET['num4'])
                                         ?><p>
                            </li>
                            <li><span>^ </span>(операция исключающего ИЛИ)<br>
                           
                                         </span>/Устанавливаются только те биты, которые установлены либо только в $a, либо только в $b, но не в обоих одновременно.</span>
                            </li>
                            <li><span>~</span> (логическое отрицание)<br>
                           
                                    <br>/*инвертирует все разряды: если значение разряда равно 1, то оно становится равным нулю, и наоборот.*/
                            </li>
                            <li><span><<</span><br>
                            <form action="" method="GET"> <input type="text" name="nm10" id="text"  />
                                <input type="text" name="nm11" id="text"/>
                                    <input type="submit" name="Enter" id="Enter" value="<<" />
                                    </form>
                                   <p> <?php 
                                       $val = $_GET['nm10'];
                                       $places = $_GET['nm11'];
                                       $res = $val << $places;
                                       print_r($res);
                                         ?><p>
                               /*x<< y - сдвигает число x влево на y разрядов. Например, 4<< 1 сдвигает число 4 (которое в двоичном представлении 100) на один разряд влево, то есть в итоге получается 1000 или число 8 в десятичном представлении*/</li>
                            <li><span>>></span><br>
                            <form action="" method="GET"> <input type="text" name="nm12" id="text"  />
                                <input type="text" name="nm13" id="text"/>
                                    <input type="submit" name="Enter" id="Enter" value=">>" />
                                    </form>
                            <?php 
                                       $val = $_GET['nm12'];
                                       $places = $_GET['nm13'];
                                       $res = $val >> $places;
                                       print_r($res);
                                         ?><p>
                                /* x>>y - сдвигает число x вправо на y разрядов. Например, 16>>1 сдвигает число 16 (которое в двоичном представлении 10000) на один разряд вправо, то есть в итоге получается 1000 или число 8 в десятичном представлении*/</li>
                        </ul>
                    </td>
                   
                </tr>
                
                </table>
                <table>
                <tr>
                    <td>
                        <h2>Операции присваивания</h2>
                        <ul>
                            <li><span>=</span>(прировнять)</li>
                            <li><span>+=</span>(сложить и присвоить)</li>
                            <li><span>-=</span>(отнять и присвоить)</li>
                            <li><span>*=</span>(умножить и присвоить)</li>
                            <li><span>/=</span>(разделить и присвоить)</li>
                            <li><span>.=</span>(сконкатить и присвоить)</li>
                            <li><span>%=</span>(делить с остатком и присвоить)</li>
                            <li><span>**=</span>(найти квадрат и присвоить)</li>
                            <li><span>&=</span>(логически умножть и присвоить)</li>
                            <li><span>|=</span>(логически сложить и умножить)</li>
                            <li><span>^=</span>(исключить и присвоить)</li>
                            <li><span><<=</span>(сдвиг влево и присвоить)</li>
                            <li><span>>>=</span>(сдвиг вправо и присвоить)</li>
                        </ul>
                    </td>
                    <td>
                        <h2>Операции сравнения</h2>
                            <ul>
                                <li><span>==</span>(оператор равенства)<br>
                                    <span class="code">$a = (2 == "2");</span>//true
                                </li>
                                <li><span>===</span>(сравнивает и по типу)<br>
                                    <span class="code">$a = (2 === "2");</span>//false
                                </li>
                                <li><span>!=</span>(неравенство)<br>
                                    <span class="code">$a = (2 != "2");</span>//false
                                </li>
                                <li><span>!==</span>(неравенство по типу)<br>
                                    <span class="code">$a = (2 !== "2");</span>//true
                                </li>
                                <li><span>></span>(больше)</li>
                                <li><span><</span>(меньше)</li>
                                <li><span>>=</span>(больше равно)</li>
                                <li><span><=</span>(меньше равно)</li>
                                <li><span><=></span>(0=; 1>; -1<)<br>
                                    /* 0- если оба значения равны;

                                    1- если значение слева больше, чем значение справа;
                                    
                                    –1- если значение слева меньше, чем значение справа*/</li>
                                
                            </ul>
                        
                    </td>
                </tr>
            </table>
        </content>
        <footer>
          <center style="color:grey;"> при поддержке ITGENIO <sup>&copy</sup></center>

        </footer>
    </div>
   <script src="input.js"></script> 
</body>
</html>
