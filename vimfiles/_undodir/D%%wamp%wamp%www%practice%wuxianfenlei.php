Vim�UnDo� �{l
��G/�J���og�s{��~e+{��,   =                 (   '   (   (   &SB�SB�    _�                             ����                                                                                                                                                                                                                                                                                                                                                         S>�S>�     �                 //�               )//无限分类，树形结构，格式化�                   5�_�                           ����                                                                                                                                                                                                                                                                                                                                                         S?S?     �                 // 来源：[]5�_�                           ����                                                                                                                                                                                                                                                                                                                                                         S?S?     �                 // 来源：[]5�_�                           ����                                                                                                                                                                                                                                                                                                                                                         S?S?     �                 // 来源：�               5�_�                           ����                                                                                                                                                                                                                                                                                                                                                         S?S?    �                 // 5�_�                       	    ����                                                                                                                                                                                                                                                                                                                                                         S? S?     �                 	function 5�_�                            ����                                                                                                                                                                                                                                                                                                                               #          #       V   #S?>S?>     �                 %function genTree($items, $id='id', $)5�_�      	                      ����                                                                                                                                                                                                                                                                                                                               #          #       V   #S?>S?>    �                  �               5�_�      
           	           ����                                                                                                                                                                                                                                                                                                                                       ,             S?GS?G    �              (   B01	function genTree($items,$id='id',$pid='pid',$son = 'children'){   )02	    $tree = array(); //格式化的树   /03	    $tmpMap = array();  //临时扁平数据   04	        "05	    foreach ($items as $item) {   '06	        $tmpMap[$item[$id]] = $item;   07	    }   08	        "09	    foreach ($items as $item) {   -10	        if (isset($tmpMap[$item[$pid]])) {   C11	            $tmpMap[$item[$pid]][$son][] = &$tmpMap[$item[$id]];   12	        } else {   .13	            $tree[] = &$tmpMap[$item[$id]];   14	        }   15	    }   16	    unset($tmpMap);   17	    return $tree;   18	}   19	    20	$items1 = array(   ?21	        array('id' => 1, 'pid' => 0, 'name' => '一级11' ),   @22	        array('id' => 11, 'pid' => 0, 'name' => '一级12' ),   ?23	        array('id' => 2, 'pid' => 1, 'name' => '二级21' ),   A24	        array('id' => 10, 'pid' => 11, 'name' => '二级22' ),   ?25	        array('id' => 3, 'pid' => 1, 'name' => '二级23' ),   A26	        array('id' => 12, 'pid' => 11, 'name' => '二级24' ),   ?27	        array('id' => 9, 'pid' => 1, 'name' => '二级25' ),   @28	        array('id' => 14, 'pid' => 1, 'name' => '二级26' ),   ?29	        array('id' => 4, 'pid' => 9, 'name' => '三级31' ),   ?30	        array('id' => 6, 'pid' => 9, 'name' => '三级32' ),   ?31	        array('id' => 7, 'pid' => 4, 'name' => '四级41' ),   ?32	        array('id' => 8, 'pid' => 4, 'name' => '四级42' ),   ?33	        array('id' => 5, 'pid' => 4, 'name' => '四级43' ),   @34	        array('id' => 13, 'pid' => 4, 'name' => '四级44' ),   @35	        array('id' => 15, 'pid' => 8, 'name' => '五级51' ),   @36	        array('id' => 16, 'pid' => 8, 'name' => '五级52' ),   @37	        array('id' => 17, 'pid' => 8, 'name' => '五级53' ),   A38	        array('id' => 18, 'pid' => 16, 'name' => '六级64' ),   39	);   40	var_dump(genTree($items1));5�_�   	              
   ,        ����                                                                                                                                                                                                                                                                                                                            ,           ,   	       v   	S@DS@D     �   +              var_dump(genTree($items1));5�_�   
                 ,       ����                                                                                                                                                                                                                                                                                                                            ,           ,   	       v   	S@KS@K    �   +              $tree = genTree($items1));5�_�                    ,       ����                                                                                                                                                                                                                                                                                                                            ,           ,   	       v   	S@NS@N     �   ,               �   ,            5�_�                   -        ����                                                                                                                                                                                                                                                                                                                            ,           ,   	       v   	S@fS@f     �   ,              foreach($tree as $)5�_�                    -       ����                                                                                                                                                                                                                                                                                                                            ,           ,   	       v   	S@jS@j    �   ,              print_r($tree)5�_�                    -       ����                                                                                                                                                                                                                                                                                                                            ,           ,   	       v   	S@sS@s     �   -               �   -            5�_�                    .       ����                                                                                                                                                                                                                                                                                                                            ,           ,   	       v   	S@zS@z     �   .   0   0      	�   .   0   /    �   -              function print_array($array)5�_�                    /       ����                                                                                                                                                                                                                                                                                                                            ,           ,   	       v   	S@�S@�     �   /   1   2      		�   /   1   1    �   .   1   0      	if(!is_array($array))5�_�                    0        ����                                                                                                                                                                                                                                                                                                                            /          1          V   S@�S@�     �   .   0   0      	if(!is_array($array)){�   /   0          		echo "----$   	}5�_�                    /        ����                                                                                                                                                                                                                                                                                                                            /          0          V   S@�S@�    �   0   2   4      			�   0   2   3    �   /   2   2      		�   /   1   1    �   .   1   0       	foreach($array as $key=>$value)5�_�                    2       ����                                                                                                                                                                                                                                                                                                                            /          4          V   S@�S@�     �   2   4   6      			�   2   4   5    �   1   4   4      		}5�_�                    3       ����                                                                                                                                                                                                                                                                                                                            /          6          V   S@�S@�    �   2   4   6      			print_array($value)5�_�                    -       ����                                                                                                                                                                                                                                                                                                                            /          6          V   SA
SA
     �   ,   .          print_r($tree);5�_�                    6        ����                                                                                                                                                                                                                                                                                                                            /          6          V   SASA     �   6               �   6            5�_�                    7       ����                                                                                                                                                                                                                                                                                                                            /          6          V   SASA   	 �   6              print_array($value)5�_�                    7       ����                                                                                                                                                                                                                                                                                                                            /          6          V   SA%SA%   
 �   6              print_array($value);5�_�                    .       ����                                                                                                                                                                                                                                                                                                                            /          6          V   SACSAC    �   .   0   8      	�   .   0   7    5�_�                    /       ����                                                                                                                                                                                                                                                                                                                            0          7          V   SALSAL    �   .   0   8      	static $count;5�_�                    1       ����                                                                                                                                                                                                                                                                                                                            0          7          V   SA_SA_     �   1   3   9      			�   1   3   8    5�_�                    2       ����                                                                                                                                                                                                                                                                                                                            0          8          V   SAgSAg     �   1   3   9      			foreach($co)5�_�                     2       ����                                                                                                                                                                                                                                                                                                                            0          8          V   SAuSAu    �   1   4   9      			for($i=0; $i<$count; $i++)5�_�      !               4       ����                                                                                                                                                                                                                                                                                                                            4          4          v   SA{SA{    �   3   5   :      -			echo '----', $key, ' : ', $value, '<br/>';5�_�       "           !   5   	    ����                                                                                                                                                                                                                                                                                                                            4          4          v   SA�SA�    �   5   7   ;      			�   5   7   :    5�_�   !   $           "   3       ����                                                                                                                                                                                                                                                                                                                            4          4          v   SA�SA�    �   2   4   ;      				echo '----';5�_�   "   %   #       $   8       ����                                                                                                                                                                                                                                                                                                                            4          4          v   SA�SA�     �   8   :   <      		�   8   :   ;    5�_�   $   &           %   9       ����                                                                                                                                                                                                                                                                                                                            4          4          v   SA�SA�    �   8   :   <      		echo '<br/>'5�_�   %   '           &   :       ����                                                                                                                                                                                                                                                                                                                            4          4          v   SB�SB�    �   :   <   =      	�   :   <   <    5�_�   &   (           '   .        ����                                                                                                                                                                                                                                                                                                                            >          /          V   SB�SB�    �   -   .   =       �   -   /          /*�   >   ?           �   >   @           */�   .   0           *function print_array($array){�   /   1           *    static $count = 0;�   0   2          & *    foreach($array as $key=>$value){�   1   3            *        if(!is_array($value)){�   2   4          ( *            for($i=0; $i<$count; $i++)�   3   5           *                echo '----|';�   4   6          0 *            echo $key, ' : ', $value, '<br/>';�   5   7           *        } else {�   6   8           *            $count++;�   7   9          " *            print_array($value);�   8   :           *        }�   9   ;           *        echo '<br/>';�   :   <           *    }�   ;   =           *    echo '<hr/>';�   <   >           *}�   =   ?           *print_array($tree);5�_�   '               (   -        ����                                                                                                                                                                                                                                                                                                                            >          /          V   SB�SB�    �   ,   .          print_r($tree);5�_�   "           $   #   4       ����                                                                                                                                                                                                                                                                                                                            4          4          v   SA�SA�    �   3   5   ;      &			echo $key, ' : ', $value, '      ';5�_�                    -       ����                                                                                                                                                                                                                                                                                                                            ,           ,   	       v   	S@YS@Y     �   ,   .           5��