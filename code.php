<?php
function book_s(int $prob_of_buy = 20): array{
    $adevrt = rand(0,100);
    if($adevrt > $prob_of_buy){
        return ['bought'=> false ,
                'discount' => 0];
    }
    $in_book = rand(0,100);
    if($in_book < 10){
        return (in_book());
    }
    return out_book();


}
function in_book(): array{
    $dis = rand(0,100);
    if($dis > 25){
        return ['bought'=> true ,
                'discount' => 0];
    }
    return ['bought'=> true ,
    'discount' => 10];
}
function out_book(): array{
    $out_book = rand(0,100);
    if($out_book > 2){
       return book_s(10);
    }
    return news ();
}
function news (): array{
    $out_book = rand(0,100);
    if($out_book > 4){
       return book_s(10);
    }
    return ['bought'=> true ,
    'discount' => 15];
}
//var_dump(book_S());
$times_buy_book = 0;
$num = 100000;
$adv_watch = 0;
$int_cost = 0;
$income = 0;
$total_cost_of_discount =0;
$no_of_people_who_used_discount = 0;


while($adv_watch < $num){
    $int_cost += 20;
    $adv_watch += rand(460,1200);
}
$b1 = 0;
$b2 =0;
$_2books = 0;
$box_mg =0;


for ($i = 0 ; $i < $num ; ++$i){
    $exc = book_s();
    if($exc['bought']){
        ++$times_buy_book;
        $pro = rand(0,100);
        if($pro < 5){
            $rep = 3;
        }
        elseif($pro < 20){
            $rep =2;
        }
        else{
            $rep =1;
        }
        $price =0;
        for ($pro_count = 0 ; $pro_count <= $rep; ++$pro_count){
            $select = rand(0,100);
            if($select < 10){
                ++$b1;
                $income += $price = 14;

            }elseif($select < 40){
                ++$b2;
                $income += $price = 14;

            }elseif($select < 80){
                ++$_2books;
                $income += $price = 28;

            }else{
                ++$box_mg;
                $income += $price = 25;
            }
        }
        if($exc['discount'] > 0){
            $no_of_people_who_used_discount += 1;
            $total_cost_of_discount += ($exc['discount']/100)*$price;
        }
    }
    
}

$total_profit = $income - ($int_cost + $total_cost_of_discount);
$cost_of_one_customer = $int_cost/$times_buy_book;
$prob = $times_buy_book/$num;


echo ' Probability of buying the book is '.$prob;
echo '<br/>';

//echo $income;
//echo '<br/>';

echo ' Total costs of advertising on instagram is '.$int_cost;
echo '<br/>';

echo ' Total cost of discount '.$total_cost_of_discount;
echo '<br/>';

echo ' Number of people who subscribed to newsletter is ';
echo '<br/>';

echo ' Number of people who bought the book is '.$times_buy_book;
echo '<br/>';

echo ' How much it cost on average to get one customer =>'.$cost_of_one_customer;
echo '<br/>';

echo  ' people who used the discount are '.$no_of_people_who_used_discount;
echo '<br/>';

echo 'the total profit from sales is '.$total_profit;
echo '<br/>';

echo 'the profit per user ';
