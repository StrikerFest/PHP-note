<section class="bg-success" id="detail_section">
    <section class="bg-secondary">
        <section class="bg-light" id="variable">

            <section id="integer">
                <h1>Integer</h1>
                <ul>
                    <li>Whole number</li>
                    <li>Can be positive or negative</li>
                    <li>Can be in decimal(base 10), base 8, base 16</li>
                </ul>
            </section>
            <section id="float">
                <h1>Float/Double</h1>
                <ul>
                    <li>Decimal point number</li>
                    <li>Round out zero to the minimum number of decimal places</li>
                </ul>
            </section>
            <section id="booleans">
                <h1>Booleans</h1>
                <ul>
                    <li>There are 2 constant use specifically as booleans: TRUE & FALSE</li>
                    <li>
                        Example cases
                        <ul>
                            <li>$true_num = 3 + 0.14159;
                            </li>
                            <li>$true_str = "Tried and true"
                            </li>
                            <li>$true_array[49] = "An array element";
                            </li>
                            <li>$false_array = array();
                            </li>
                            <li>$false_null = NULL;
                            </li>
                            <li>$false_num = 999 - 999;
                            </li>
                            <li>$false_str = "";
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section id="null">
                <h1>NULL</h1>
                <ul>
                    <li>A special type that have one value: NULL</li>
                    <li>Return false when test in boolean context</li>
                    <li>Return false when test with IsSet()</li>
                </ul>
            </section>
            <section id="strings">
                <h1>Strings</h1>
                <ul>
                    <li>Will return
                        <?php echo ("" == true) ? "true" : "false" ?> when test in boolean context
                    </li>
                    <li>Will return
                        <?php $x = "";
                        echo (isset($x)) ? "true" : "false" ?> when test with isset()
                    </li>
                    <li>
                        Double quote will print variable
                    </li>
                </ul>
            </section>
        </section>
        <section class="bg-light" id="variable_scope">
            <section id="scope_overview">
                <p>
                    Scope can be defined as the range of availability a variable has to the program in which it's
                    declared
                </p>
            </section>
            <section id="local">
                <h1>Local Variables</h1>
                <ul>
                    <li>Variable declared in a function is considered local</li>
                    <li>Variable declared outside that function is considered a different variable</li>
                </ul>

                <?php
                $x1 = 1;
                echo "Same variable, assigned another value inside of function";
                echo "<br>Before function: $x1";
                function add()
                {
                    $x1 = 2;
                    echo "<br>Inside of function: $x1";
                }
                add();
                echo "<br>After function: $x1";
                ?>
            </section>
            <section id="function">
                <h1>Function Variables</h1>
                <ul>
                    <li>Declared after the function name and inside parentheses</li>
                </ul>
                <?php
                $x1 = 1;
                echo "Same variable, one outside one put in add2 function";
                // echo "<br>Before function: $x1";
                
                function add2($x2)
                {
                    $x2 += 2;
                    echo "<br>Inside of function: $x2";
                }
                add2($x1);
                // echo "<br>After function: $x1";
                ?>
            </section>
            <section id="global">
                <h1>Global Variables</h1>
                <ul>
                    <li>Can be accessed in any part of the program</li>
                    <li>In order to be modified, must be explicitly declared to be global in the function in which it's
                        to be modified</li>
                    <li>By placing the keyword GLOBAL in front of the variable that should be recognized as global</li>
                    <li>An existing variable can be placed again by the GLOBAL keyword</li>
                </ul>
                <?php
                $x_GLOBAL = 1;
                echo "<br>Before function not GLOBAL: $x_GLOBAL";
                function add3()
                {
                    global $x_GLOBAL;
                    $x_GLOBAL += 3;
                    echo "<br>Inside of function GLOBAL: $x_GLOBAL";
                }
                add3();
                echo "<br>After function GLOBAL: $x_GLOBAL";
                ?>

            </section>
            <section id="static">
                <h1>Static Variables</h1>
                <ul>
                    <li>Like function variable, but will not be destroyed on the function's exit</li>
                    <li>Can be declared with the keyword STATIC keyword</li>
                    <li>Can't use outside scope</li>
                </ul>
                <?php
                function add4()
                {
                    static $x_STATIC = 0;
                    $x_STATIC += 3;
                    echo "<br>Inside of function GLOBAL: $x_STATIC";
                }
                echo "Repeated";
                add4();
                add4();
                add4();
                echo "<br>After function GLOBAL: error";
                ?>
            </section>
        </section>
        <section class="bg-light" id="constant">
            <section id="constant_definition">
                <h1>Definition</h1>
                <ul>
                    <li>A constant is a name for a simple value</li>
                    <li>Cannot change during the execution of the script</li>
                    <li>Case sensitive by default</li>
                    <li>UPPERCASE by convention</li>
                    <li>To define a constant, use define()</li>
                    <li>To get a constant, call it's name, without $</li>
                    <li>Can also use constant function to get constant name dynamically</li>
                </ul>
            </section>
            <section id="constant_example">
                <h1>Example</h1>
                <PRE>
    define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE");
    $x = "MINSIZE";
    echo constant("$x");
            </PRE>
                <?php
                define("MINSIZE", 50);

                echo MINSIZE;
                echo constant("MINSIZE");
                $x = "MINSIZE";
                echo constant("$x");
                ?>
            </section>

            <section id="constant_differences">
                <h1>Differences between constant and variable</h1>
                <ul>
                    <li>
                        No need to write a $ before a constant
                    </li>
                    <li>Must be define with define() function</li>
                    <li>Constants can be defined and accessed everywhere</li>
                    <li>Constants can't change</li>
                </ul>
            </section>

            <section id="constant_magic">
                <h1>Magic constant</h1>
                <ul>
                    <li>__LINE__
                        <ul>
                            <li>The current line of the file</li>
                            <li>Ex:
                                <?php echo __LINE__ ?>
                            </li>
                        </ul>
                    </li>
                    <li>__FILE__
                        <ul>
                            <li>The full path and filename of the file. If used insde an include the name of the
                                included
                                file is returned </li>
                            <li>Ex:
                                <?php echo __FILE__ ?>
                            </li>
                        </ul>
                    </li>
                    <li>__FUNCTION__
                        <ul>
                            <li>The function name</li>
                            <li>Ex:
                                <?php
                                function magicConstant()
                                {
                                    echo __FUNCTION__;
                                }
                                magicConstant() ?>
                            </li>
                        </ul>
                    </li>
                    <li>__CLASS__
                        <ul>
                            <li>The class name</li>
                            <li>Ex:
                                <?php
                                class MagicConstantClass
                                {
                                    function test()
                                    {
                                        echo __CLASS__;

                                    }

                                    function testMethod()
                                    {
                                        echo __METHOD__;
                                    }
                                }

                                $x = new MagicConstantClass();
                                $x->test();
                                ?>
                            </li>
                        </ul>
                    </li>
                    <li>__METHOD__
                        <ul>
                            <li>The current line of the file</li>
                            <li>Ex:
                                <?php echo $x->testMethod(); ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
        </section>
    </section>
    <section class="bg-secondary">
        <section class="bg-light" id="detail_numeric_array">
            <h1>Numeric array</h1>
            <ul>
                <li>The value can be any type of data</li>
                <li>The index will be represented by numbers</li>
                <li>Default array index start from zero</li>
            </ul>
            <h2>Example</h2>
            <pre class="bordergray">
            <code>
            $number = array(1, 2, 3, 4, 5);
            foreach ($number as $key => $value) {
                echo 'Key: ' . $key . ' Value: ' . $value;
            }
            </code>
        </pre>
            <div>
                Output
                <?php
                $number = array(1, 2, 3, 4, 5);
                foreach ($number as $key => $value) {
                    echo '<br>Key: ' . $key . ' Value: ' . $value;
                }
                ?>
            </div>
            <pre class="bordergray">
            <code>
            $number1;
            $number1[0] = 1;
            $number1[1] = 3;
            $number1[2] = 5;

            foreach ($number1 as $key => $value) {
                echo 'Key: ' . $key . ' Value: ' . $value;
            }
            </code>
        </pre>
            <div>
                Output
                <?php
                $number1;
                $number1[0] = 1;
                $number1[1] = 3;
                $number1[2] = 5;

                foreach ($number1 as $key => $value) {
                    echo '<br>Key: ' . $key . ' Value: ' . $value;
                }
                ?>
            </div>
        </section>
        <section class="bg-light" id="detail_associative_array">
            <h1>Associative array</h1>
            <ul>
                <li>Similar to numeric array except the index part</li>
                <li>The indexes of an associative array will alway be string to establish association between indexes
                    and values</li>
            </ul>
            <pre class="bordergray">
                <code>
                // Container array
                $coolPeople;
                // Index array
                $people = array("John", "Jim", "Jack");
                // Assign every index a value
                for ($i = 0; $i < sizeof($people); $i++) {
                    $coolPeople[$people[$i]] = "Very cool";
                }
                echo "Everyone is cool";
                foreach ($coolPeople as $CPK => $CPV) {
                    echo "Key $CPK: $CPV";
                }
                // Change one index value
                echo "Someone became super cool";
                $coolPeople["Jack"] = "Super cool";
                echo "After someone became super cool";

                foreach ($coolPeople as $CPK => $CPV) {
                    echo "Key $CPK: $CPV";
                }
                </code>
            </pre>
            <div>
                <?php
                // Container array
                $coolPeople;
                // Index array
                $people = array("John", "Jim", "Jack");
                // Assign every index a value
                for ($i = 0; $i < sizeof($people); $i++) {
                    $coolPeople[$people[$i]] = "Very cool";
                }
                echo "<br>Everyone is cool";
                foreach ($coolPeople as $CPK => $CPV) {
                    echo "<br>Key $CPK: $CPV";
                }
                // Change one index value
                echo "<br>Someone became super cool";
                $coolPeople["Jack"] = "Super cool";
                echo "<br>After someone became super cool";

                foreach ($coolPeople as $CPK => $CPV) {
                    echo "<br>Key $CPK: $CPV";
                }
                ?>
            </div>
        </section>
        <section class="bg-light" id="detail_multidimentional_array">
            <h1>Multidimentional array</h1>
            <ul>
                <li>Each element in the main array can be another array, and so on</li>
            </ul>
            <pre class="border-gray">
                <code>
                $arrayNo1 = array(
                    "mark" => array(
                        "salary" => array(
                            "main" => "1,500$",
                            "bonus" => "500$",
                            "side" => "500$"
                        ),
                        "position" => "Mr.Boss",
                        "products" => array("pain","misery","unlimited vacation")
                    )
                );

                echo "Mark's side salary: " . $arrayNo1["mark"]["salary"]["side"];
                echo "Mark's product no 3: " . $arrayNo1["mark"]["products"][2];
                </code>
            </pre>
            <?php
            $arrayNo1 = array(
                "mark" => array(
                    "salary" => array(
                        "main" => "1,500$",
                        "bonus" => "500$",
                        "side" => "500$"
                    ),
                    "position" => "Mr.Boss",
                    "products" => array("pain", "misery", "unlimited vacation")
                )
            );

            echo "Mark's side salary: " . $arrayNo1["mark"]["salary"]["side"];
            echo "<br>";
            echo "Mark's product no 3: " . $arrayNo1["mark"]["products"][2];
            ?>
        </section>
    </section>
</section>