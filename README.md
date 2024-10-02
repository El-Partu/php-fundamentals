##### Hey! Don't be hard on me, I explain things the way I understand them. I am ready to learn and remember to correct me if there's an error in my understanding

# VARIABLES

Variables just in other programming languages it is container for storing data. In our everyday life we have variables around us but just that we don't call them by the name "variable".Variables can range from something simple as a cup to something as complex as a house. Every variable has a name and by that name it's called by. Just like a container that holds water for us to drink is called cup and everytime we want something to drink water we say _"get me the cup"_. So are variables.

#### `Types of variables`

- Single value variables: These are variables that can take on a single value. This varibles take on a single value at a time, let's take a real life example, let's consider a cup, a cup is single value variable because at every time it contains a one specific liquid. Unless we trying to go out of the normal, by putting two unrelated liquids in one cup.
  `examples: $firstName = "Adjoa"; , $age = 20;`
- Multi-value variables: These are variables that can take on several values of any type (_NB_: in some languages like php) or of the same type. Let's consider an everyday life example, consider a **Cabinet**, it is a single whole container but inside it there are several division in it and these divisions you try as much as posible to keep one specific group of item in it to help you when you to find them . This is basically what multi-value variables are, a giant container with divisions and this division we keep a specific item in the division.
  `example of this variable are arra: $arr = ["3", "good", 4]; , objects: $obj = ["firstName"=>"Sheniel", "secondName"=>"Entsuah"];`

# ARRAYS

# STRINGS

# LOOPS

# CONDITIONALS

# FUNCTIONS

# MATHS

# CLASSES AND OBJECTS

PHP support Object oriented programming(OOP), this is a paradigm of programming where data and method are modelled in to an object. let's consider a pharmacy cabinet, every drag has it name tag on the shelf and whenever we need that medicine we don't need to search all shelf to look for it but rather we go straight to the shelf that has the name we are looking for. This is an example of how an object is, Objects are in key/value pair, in regards to the pharmacy carbinet the "name" of the shelf is the "key" and the "content" of the carbinet is the value. Like the pharmacy carbinet that is how OOP handles data and methods and this makes it very fast. The major fundamental concept that holds OOP are **Classes and Objects**

#### `Using creation story to explain the concept of Classes and Object`

- **Classes**: The ideal definition of classes is that its a blue-print for creating objects. Let's get into our everyday life, how do people create things? First they have to imagine what they want to create, from the imagination comes an image that looks like the end-product of what they want to create but remember this is just an imagination and this is what we call the **blue-print**. A blue-print is the picture of the how the end-product should look like or behave. This is the picture an engineer will look up to or programmer to make the end-product.

#### `How classes are defined in PHP`

Classes are defined by the key word `class` followed by the name of the class with initial letter being capital `Animal` then followed by parenthesis `{}`

```
class Animal{

}
```

#### `THERE ARE TWO KINDS OF CONTENT OF A CLASS`

1. **Attributes**: These are the qualities of the class. They describe what the "end-product" should look like. When God was creating man he gave some admirable qualities, which are the ability to eye color, skin color, head shape, height etch and every individual has their own qualities. In simple terms _attributes_ are simply variables in classes but with an addition _`keyword`_ called _`access modifiers`_.

- **`Access Modifiers :`** are keywords that show accessibility law or principle concerning the variable in the class. Let's consider an education institution they have a tag for every student at the end of their graduation _[first class, second class, third class and a pass]_, this tags are attribute in the _university_ which is the class. These tags have rules to get them. Same as variables in classes.
- **`Types of Access modifiers in PHP`**
  **`Public`**: attributes with these modifier means it can be accessed everywhere in the class, outside the class and also any of the derived classes. Let's consider a real life example: `public access modifier` is like a _public school_ and this is accessible to all, rich or poor, whoever wants it can use it. Same meaning as variable with the public modifier keyword. `public access modifier` is the `default` access modifier. Therefore when the variable access modifier is not specified its automatically assigned `public access modifier`. Example:

  ```
  class Animal{
    public $name; OR $eyeColor;
  }
  ```

  **`Protected Access Modifier`**: attributes with this access modifier simply means it can be accessed or used within the class itself and any class that is derived from it, the `keyword` used to define protected attribute is `protected` . Let's consider a real life example, the `protected access modifier` is a like a wifi in own by our parents and has been protected by a password. This wifi is only accessible to the owner and whoever has been given the password in this case becomes the `derived class` but outsiders can not have access to that attribute. Attribute with `protected access modifier` cannot be accessed outside the class. Example

  ```
  class Animal{
    $protected $soul;
  }
  ```

  **`Private Access Modifier`**: attributes with this access modifier are exclusive to their class. They cannot be accessed by derived class or outside the class. Let's look at a real life example, everyone has a secret that they alone knows, this secret is not shared among anyone even trusted people (derived classes) or outsiders and this remain soley in as. This is how `private access modifiers` works.

```
class Animal{
    private $sex;
}
```

1. **Methods** : These are functions in classes. Let's go back to our creation story, God created certain organs in all living this and this organs have their functionalities and do this function over and over again until they eventually die. These organs have certain materials(`attributes`) that power their functionalities and in `methods` they are called `parameters` of the `method`. Let's consider animals nothing enters their bowl [`methods without parameter`] but returns waste, consider the stomack which serves as storage[`methods for take in parameters process it for other part of the application`] breaks down the food an send via channels that require it.

- #### `Types of methods`

- 1. `Access modifier based classes` : the `access modifiers` have the same meanings as that of the `attrubutes`

```
class Animal{

    //public access modifier method
 function $speak(){
        echo "Meow";
    }

    OR

    public function $speak(){
        echo "Meow";
    }

    //protected access modifier method

    protected function $speak(){
        echo "Meow";
    }

    //private access modifier method

    private function Spartner(){

    }
}
```

- 2. `Static method`: this is a type of method that is called directly on the class[`works with public access modifier static method`] for a particular work.For `protected static class` it can be accessed in `base` and `derived` class using the `keyword` [`self:: staticMethodName`]. We don't need to create an instance of that class before using it. A real life example of static method is `responsibilities`, for whatever action which went wrong or right we call the person that instigated it. It can also have all the three access modifiers.

```
class Example {
    // Public static method
    public static function publicStaticMethod() {
        echo "This is a public static method.<br>";
    }

    // Private static method
    private static function privateStaticMethod() {
        echo "This is a private static method.<br>";
    }

    // Protected static method
    protected static function protectedStaticMethod() {
        echo "This is a protected static method.<br>";
    }

    // Public method to call the private static method
    public static function callPrivateMethod() {
        self::privateStaticMethod(); // Accessing the private static method
    }
}
```

- 3. `Final method`: this is type of method which can not be overriding by the `subclasses or derived classes`. A real life example is children inheriting chromosomes from their parents, this chromosomes are permanent and nothing can be done about it.
     Example

     ```
        class Base {
            final public function display() {
                echo "This is a final method.";
            }
        }
     ```

- 4. `Abtstract Method`: This is a method that is defined in an `abstract class` and need to implemented in the `derived class` . That is any class that inherit from the derived class. Abstract method starts with the `abstract` keyword with the method name and parenthesis.

```
class Abstract{
   abstract public function $readText();
}
```
