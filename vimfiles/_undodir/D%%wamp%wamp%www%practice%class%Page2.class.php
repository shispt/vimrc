Vim�UnDo� Ґ�?��G����C!�^4D�7�J�C��   �                 M       M   M   MS��S��   ' _�                             ����                                                                                                                                                                                                                                                                                                                                                         S��S��    �                   5�_�                            ����                                                                                                                                                                                                                                                                                                                                                         S�S�     �                 // �               �                  5�_�                           ����                                                                                                                                                                                                                                                                                                                                                         S�S�     �               �                 // 来源：�               5�_�                           ����                                                                                                                                                                                                                                                                                                                                                         S�S�    �      	   	      	�      	       �               	�             �               	�             �                 class Page2{}�                 // 5�_�                           ����                                                                                                                                                                                                                                                                                                                                                         SÀSÀ    �               	�             �               	�             �               	�             �               	�             �   
            	�   
          �   	            	�   	      
    �      	   
      	�      	   	    �      	   	      	protected $total_rows;    // 5�_�                           ����                                                                                                                                                                                                                                                                                                                                                         S�S�     �               		$this->parameter = !empty()�               		�             �               	public function __construct()�               	protected $url;5�_�                       /    ����                                                                                                                                                                                                                                                                                                                                                         S�^S�^     �               		$this->list_row = !empty()�               /		$this->parameter = !empty($data['parameter'])5�_�      	                     ����                                                                                                                                                                                                                                                                                                                                                         SĈSĈ     �               1	public $list_row;    // 列表每页显示行数5�_�      
           	      +    ����                                                                                                                                                                                                                                                                                                                                                         SċSċ     �               ,		$this->list_row = !empty($data['list_rows)5�_�   	              
      .    ����                                                                                                                                                                                                                                                                                                                                                         SĠSĠ     �               .		$this->list_row = !empty($data['list_rows'])5�_�   
                        ����                                                                                                                                                                                                                                                                                                                                                         SĳSĳ     �               		$this->total_pages = ceil()�               D		$this->list_row = !empty($data['list_rows']) && $data['list_rows']5�_�                       ?    ����                                                                                                                                                                                                                                                                                                                                                         S��S��     �               		$this->page_name = !empty()�               ?		$this->total_pages = ceil($this->total_rows/$this->list_rows)5�_�                       /    ����                                                                                                                                                                                                                                                                                                                                                         S��S��    �               /		$this->page_name = !empty($data['page_name'])5�_�                       K    ����                                                                                                                                                                                                                                                                                                                                                         S�S�     �               		$this->method = !empty()�               "		$this->ajax_func_name = !empty()�               K		$this->page_name = !empty($data['page_name']) ? $data['page_name'] : 'p';5�_�                       )    ����                                                                                                                                                                                                                                                                                                                                                         S�8S�8    �               )		$this->method = !empty($data['method'])5�_�                       A    ����                                                                                                                                                                                                                                                                                                                                                         S�VS�V     �               A		$this->method = !empty($data['method']) ? $data['method'] : '';5�_�                           ����                                                                                                                                                                                                                                                                                                                                                         S�]S�]    �      !   !    �                 		}�                			�             �               		// 5�_�                            ����                                                                                                                                                                                                                                                                                                                                                         S��S��     �          #      			�          "    5�_�                       V    ����                                                                                                                                                                                                                                                                                                                                                         S��S��    �      "   #      		}�          #      V			$this->now_page = !empty($_GET[$this->page_name]) ? intval($_GET[$this->page_name])5�_�                    !       ����                                                                                                                                                                                                                                                                                                                                                         S�S�   	 �       "   $      		$this->now_page5�_�                    !   #    ����                                                                                                                                                                                                                                                                                                                                                         S�S�   
 �       "   $      #		$this->now_page = $this->now_page5�_�                    !   ?    ����                                                                                                                                                                                                                                                                                                                                                         S�S�     �   "   $   &      		if()�       $   $      ?		$this->now_page = $this->now_page <= 0 ? 1 : $this->now_page;5�_�                    #       ����                                                                                                                                                                                                                                                                                                                                                         S�(S�(    �   "   $   &       		if(!empty($this->total_pages))5�_�                    #   #    ����                                                                                                                                                                                                                                                                                                                                                         S�;S�;     �   "   $   &      $		if(!empty($this->total_pages) && )5�_�                    #   H    ����                                                                                                                                                                                                                                                                                                                                                         S�IS�I     �   %   '   )      		�   %   '   (    �   $   &   (      		}�   #   %   (      			�   #   %   '    �   "   %   &      H		if(!empty($this->total_pages) && $this->now_page > $this->total_pages)5�_�                    &   =    ����                                                                                                                                                                                                                                                                                                                                                         S�pS�p    �   %   '   )      =		$this->first_row = $this->list_rows * ($this->now_page - 1)5�_�                    '        ����                                                                                                                                                                                                                                                                                                                                                         S�qS�q    �   &   '           5�_�                    '       ����                                                                                                                                                                                                                                                                                                                                                         S�sS�s    �   -   /   /      	protected function _get_link()�   )   /   +      	 * �   )   +   *    �   '   *   )      	�   '   )   (    5�_�                    .       ����                                                                                                                                                                                                                                                                                                                                                         SѨSѨ     �   -   /   /       	protected function _get_link($)5�_�                    .   +    ����                                                                                                                                                                                                                                                                                                                                                         SѫSѫ     �   .   0   1      		�   .   0   0    �   -   0   /      +	protected function _get_link($page, $text)5�_�                     /       ����                                                                                                                                                                                                                                                                                                                                                         SѼSѼ    �   /   1   3      			�   /   1   2    �   .   1   1      		switch($this->method)5�_�      !               0       ����                                                                                                                                                                                                                                                                                                                                                         S�S�     �   1   3   5      			if()�   /   3   3      			case 'ajax':5�_�       "           !   2       ����                                                                                                                                                                                                                                                                                                                                                         S�1S�1    �   2   4   7      				�   2   4   6    �   1   4   5      			if($this->parameter)5�_�   !   #           "   4       ����                                                                                                                                                                                                                                                                                                                                                         S��S��    �   4   6   8      			�   4   6   7    5�_�   "   $           #   5   4    ����                                                                                                                                                                                                                                                                                                                                                         S�S�     �   4   6   8      4			return '<a onclick="' . $this->ajax_func_name . '5�_�   #   %           $   5   8    ����                                                                                                                                                                                                                                                                                                                                                         S�S�    �   4   6   8      8			return '<a onclick="' . $this->ajax_func_name . '(\')5�_�   $   &           %   5   7    ����                                                                                                                                                                                                                                                                                                                                                         S� S�      �   4   6   8      7			return '<a onclick="' . $this->ajax_func_name . '(\'5�_�   %   '           &   5   s    ����                                                                                                                                                                                                                                                                                                                                                         S�<S�<     �   7   9   ;      			$url = str_replace()�   4   9   8      s			return '<a onclick="' . $this->ajax_func_name . '(\'' . $page . '\'' . $parameter . ')" href="javascript:void(0)5�_�   &   (           '   8   3    ����                                                                                                                                                                                                                                                                                                                                                         S��S��    �   7   =   ;      3			$url = str_replace('?', $page, $this->parameter)5�_�   '   )           (   <       ����                                                                                                                                                                                                                                                                                                                                                         SԴSԴ     �   ;   =   ?      			return '<a href="' . 5�_�   (   *           )   <   .    ����                                                                                                                                                                                                                                                                                                                                                         SԺSԺ    �   ;   >   ?      .			return '<a href="' . $this->_get_url($page)5�_�   )   +           *   @        ����                                                                                                                                                                                                                                                                                                                                                         S�|S�|     �               @   <?php   // 分页类 Page2   ;// 来源：http://www.oschina.net/code/snippet_162279_5852       class Page2{   &	public $first_row;    // 起始行数   2	public $list_rows;    // 列表每页显示行数   '	protected $total_pages;   // 总页数   '	protected $total_rows;    // 总行数   *	protected $now_page;      // 当前页数   o	protected $method = 'defalut';   // 处理情况，Ajax分页、html分页（静态化时）、普通get方式   	protected $parameter = '';   2	protected $page_name;    // 分页参数的名称   	protected $ajax_func_name;   )	public $plus = 3;     // 分页偏移量   	protected $url;       .	public function __construct($data = array()){   *		$this->total_rows = $data['total_rows'];   J		$this->parameter = !empty($data['parameter']) ? $data['parameter'] : '';   e		$this->list_rows = !empty($data['list_rows']) && $data['list_rows']<=100 ? $data['list_rows'] : 15;   @		$this->total_pages = ceil($this->total_rows/$this->list_rows);   K		$this->page_name = !empty($data['page_name']) ? $data['page_name'] : 'p';   Y		$this->ajax_func_name = !empty($data['ajax_func_name']) ? $data['ajax_func_name'] : '';   A		$this->method = !empty($data['method']) ? $data['method'] : '';       		// 当前页面    		if(!empty($data['now_page'])){   /			$this->now_page = intval($data['now_page']);   
		} else {   [			$this->now_page = !empty($_GET[$this->page_name]) ? intval($_GET[$this->page_name]) : 1;   		}   ?		$this->now_page = $this->now_page <= 0 ? 1 : $this->now_page;       I		if(!empty($this->total_pages) && $this->now_page > $this->total_pages){   (			$this->now_page = $this->total_pages;   		}   >		$this->first_row = $this->list_rows * ($this->now_page - 1);   	}   	/**   	 * 得到当前连接   	 * @param $page   	 * @param $test   	 * @return string   	 */   ,	protected function _get_link($page, $text){   		switch($this->method){   		case 'ajax':   			$parameter = '';   			if($this->parameter){   (				$parameter = ',' . $this->parameter;   			}   �			return '<a onclick="' . $this->ajax_func_name . '(\'' . $page . '\'' . $parameter . ')" href="javascript:void(0)">' . $text . '</a>' . "\n";   				break;   		case 'html':   4			$url = str_replace('?', $page, $this->parameter);   <			return '<a href="' . $url . '">' . $text . '</a>' . "\n";   				break;   
		default:   N			return '<a href="' . $this->_get_url($page) . '">' . $text . '</a>' . "\n";   				break;   		}   	}   }5�_�   *   ,           +   \        ����                                                                                                                                                                                                                                                                                                                                                         S؃S؃     �   ^   `   _    �   \   _   ^      	�   \   ^   ]    5�_�   +   -           ,   _       ����                                                                                                                                                                                                                                                                                                                                                         S؋S؋     �   ^   `   `      		* 5�_�   ,   .           -   _       ����                                                                                                                                                                                                                                                                                                                                                         S؋S؋    �   ^   b   `      		5�_�   -   /           .   a       ����                                                                                                                                                                                                                                                                                                                                                         SآSآ    �   b   d   f      			�   b   d   e    �   a   d   d      		�   a   c   c    �   `   c   b      	public function first_page()5�_�   .   0           /   c   
    ����                                                                                                                                                                                                                                                                                                                                                         SظSظ     �   b   d   f      
			return 5�_�   /   1           0   c   &    ����                                                                                                                                                                                                                                                                                                                                                         S��S��    �   c   f   f      		}�   b   d   f      &			return $this->_get_link('1', $name)5�_�   0   2           1   f       ����                                                                                                                                                                                                                                                                                                                                                         S�S�     �   j   m   l      	 * �   j   l   k    �   f   k   h      	�   f   h   g    5�_�   1   3           2   ^       ����                                                                                                                                                                                                                                                                                                                                                         S�*S�*    �   ]   `   m      	/** 得到第一页5�_�   2   4           3   _       ����                                                                                                                                                                                                                                                                                                                                                         S�,S�,    �   ^   `   n      	 * 得到第一页5�_�   3   5           4   _       ����                                                                                                                                                                                                                                                                                                                            _          `             S�:S�:    �   _   a   n      	* @return string�   ^   `   n      	* 得到第一页5�_�   4   6           5   m       ����                                                                                                                                                                                                                                                                                                                            _          `             S�>S�>     �   m   o   n    5�_�   5   7           6   n       ����                                                                                                                                                                                                                                                                                                                            _          `             S�?S�?    �   m   o   o      	 * 5�_�   6   8           7   n       ����                                                                                                                                                                                                                                                                                                                            _          `             S�VS�V     �   m   o   o      	 public function 5�_�   7   9           8   n   3    ����                                                                                                                                                                                                                                                                                                                            _          `             S�bS�b    �   m   p   o      3	 public function last_page($name = '最后一页')5�_�   8   :           9   n        ����                                                                                                                                                                                                                                                                                                                            c          f          V   S�iS�i    �   n   s   p    �   n   o   p    5�_�   9   ;           :   m       ����                                                                                                                                                                                                                                                                                                                            c          f          V   S�rS�r    �   l   n   t      	 * /5�_�   :   <           ;   o       ����                                                                                                                                                                                                                                                                                                                            c          f          V   S�S�     �   n   p   t      		if($this->now_page > 5){5�_�   ;   =           <   o       ����                                                                                                                                                                                                                                                                                                                            c          f          V   SفSف    �   n   p   t      		if($this->now_page ){5�_�   <   >           =   p       ����                                                                                                                                                                                                                                                                                                                            c          f          V   SٙSٙ     �   o   q   t      '			return $this->_get_link('1', $name);5�_�   =   ?           >   s       ����                                                                                                                                                                                                                                                                                                                            c          f          V   S٦S٦     �   x   z   z      	public function up_page()�   s   z   u      	�   s   u   t    5�_�   >   @           ?   y   -    ����                                                                                                                                                                                                                                                                                                                            c          f          V   SٿSٿ     �   y   {   |      		�   y   {   {    �   x   {   z      -	public function up_page($name = '上一页')5�_�   ?   A           @   z       ����                                                                                                                                                                                                                                                                                                                            c          f          V   S��S��     �   z   |   ~      			�   z   |   }    �   y   |   |      		if($this->now_page != 1)5�_�   @   B           A   {   +    ����                                                                                                                                                                                                                                                                                                                            c          f          V   S��S��     �   z   |   ~      -			return $this->_get_link($this->now_page-1)5�_�   A   C           B   {   *    ����                                                                                                                                                                                                                                                                                                                            c          f          V   S��S��     �   z   |   ~      .			return $this->_get_link($this->now_page- 1)5�_�   B   D           C   {   .    ����                                                                                                                                                                                                                                                                                                                            c          f          V   S��S��   ! �   z   |   ~      /			return $this->_get_link($this->now_page - 1)5�_�   C   E           D   |       ����                                                                                                                                                                                                                                                                                                                            c          f          V   S��S��   " �   |   ~         		�   |   ~   ~    5�_�   D   F           E   ~       ����                                                                                                                                                                                                                                                                                                                            ~          u          V   SځSځ     �   ~   �       �   ~          5�_�   E   G           F   ~       ����                                                                                                                                                                                                                                                                                                                            ~          u          V   SځSځ   # �   ~   �   �    5�_�   F   H           G   �       ����                                                                                                                                                                                                                                                                                                                            ~          u          V   SچSچ   $ �   �   �   �      	 * 上一页5�_�   G   I           H   �       ����                                                                                                                                                                                                                                                                                                                            �          �          v   SڊSڊ     �   �   �   �      .	public function up_page($name = '上一页'){5�_�   H   J           I   �       ����                                                                                                                                                                                                                                                                                                                            �          �          v   SڌSڌ   % �   �   �   �      -	public function p_page($name = '上一页'){5�_�   I   K           J   �       ����                                                                                                                                                                                                                                                                                                                            �          �          v   SڔSڔ     �   �   �   �      		if($this->now_page != 1){5�_�   J   L           K   �   ,    ����                                                                                                                                                                                                                                                                                                                            �          �          v   SڧSڧ   & �   �   �   �      7			return $this->_get_link($this->now_page - 1, $name);5�_�   K   M           L   �        ����                                                                                                                                                                                                                                                                                                                            �          �          v   S��S��     �   �   �   �      	public function show()�   �   �   �      	�   �   �   �    5�_�   L               M   �   !    ����                                                                                                                                                                                                                                                                                                                            �          �          v   S��S��   ' �   �   �   �      !	public function show($param = 1)5��