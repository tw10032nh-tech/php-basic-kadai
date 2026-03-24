<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
//クラスを作成する
class Food
{
    public string $name;
    public int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price(): void
    {
        echo "Price: {$this->price}<br>";
    }
}

class Animal
{
    public string $name;
    public int $height;
    public int $weight;

    public function __construct(string $name, int $height, int $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height(): void
    {
        echo "Height: {$this->height}<br>";
    }
}

//インスタンスを作成し、出力する
$food = new Food('apple', 300);
$animal = new Animal('dog', 50, 10);

//インスタンスの中身を出力
print_r($food);
print_r($animal);

//メソッドへアクセスする
$food->show_price();
$animal->show_height();

       ?>
   </p>
</body>

</html>