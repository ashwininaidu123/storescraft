<?php $SQLQUERY= mysql_query("SELECT * FROM products WHERE Column = '$variable'") or die(mysql_error());

while($row = mysql_fetch_array( $SQLQUERY)) {
                                                // echo out the contents of each row into a table
                                                if(empty($row['Column'])){
                                                $html .= '<p>No results!</p>';
                                                }
                                                else{
                                                $html .= '<pre>Yes we found this: '.$row['Column'].'</pre>';
                                                }
                                        }
										?>