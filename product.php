<?
/*
- файл в котором обьявляется класс называется также как сам класс
- между членами класса и самой конструкцией класса расставлять одну пустую строку
*/ 

/*
спецификаторы доступа:
public - можно вызывать в глобальном пространстве (т.е. за пределами класса), по умолчанию
static - можно вызывать без создания обьекта класса
private - можно вызывать только внутри класса и классах-наследниках
protected(защищенный) - тоже что и private, только внутри класса в котором обьявлено

можно указывать несколько спецификаторов подряд 
*/

class product {

	// члены класса - свойства и методы внутри класса

	// свойства класса - переменные внутри класса
	public $table = __DIR__;

	// метод класса
	public function read($id) {
		return $this->table.$id; // можно вызывать внутри класса его члены при помощи "$this->название_члена", используется только внутри класса
	}

}

// что бы задействовать класс, нужно:
$productObj = new product; // создание обьекта (экземпляра) класса
$productObj->table; // вызов свойства класса
echo $productObj->read(5); // вызов метода класса