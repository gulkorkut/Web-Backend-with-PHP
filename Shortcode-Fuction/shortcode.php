function wporg_shortcode( $atts = [], $content = null, $tag = '' ) {
    // normalize attribute keys, lowercase
    $atts = array_change_key_case( (array) $atts, CASE_LOWER );
 
    // override default attributes with user attributes
    $wporg_atts = shortcode_atts(
        array(
            'title' => 'WordPress.org',
			'employee'=> '',
        ), $atts, $tag
    );
 
    // start box
    $o = '<div class="wporg-box">';
	 $o2 = '<div class="wporg-box">';
 
    // title
    $o .= '<h2>' . esc_html__( $wporg_atts['title'],'wporg' ) . '</h2>';
	 $o2 .= '<h2>' . esc_html__( $wporg_atts['employee'],'wporg' ) . '</h2>';
	 include('wp-load.php');
	 global $current_user;
   



        $serverName = "";
$connectionInfo = array( "Database"=>"",
                         "UID"=>"",
                         "PWD"=>"**",
                         "Encrypt"=>true,
                         "TrustServerCertificate"=>true,
                         "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if($conn){
   // echo "success";
}
else{
    echo "fail";
}       
   
	$employee_name = $wporg_atts['employee'];
	
	
    $sql= "SELECT * FROM (type your sql query)" ;
    $stmt = sqlsrv_query( $conn, $sql); 
    $count=0; 
    while( true) { 
		
		$login_person= $current_user->display_name;
     
        $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC); 
        if(is_null($row)){
            // echo "data bitti";
                break;
            }
            if($count==0){
                write which attributes you want
              $count++;
				
				if (str_contains($kullanici_adi, '.')) { 
    //$link_user= str_replace(".", '-', $kullanici_adi);
					
					
}


            }
           


        }
 
    // enclosing tags
    if ( ! is_null( $content ) ) {
        // $content here holds everything in between the opening and the closing tags of your shortcode. eg.g [my-shortcode]content[/my-shortcode].
        // Depending on what your shortcode supports, you will parse and append the content to your output in different ways.
        // In this example, we just secure output by executing the_content filter hook on $content.
        
		
            
          
		echo $attribute;
		echo "<br>";
		
		
		
	
        
         
        
          echo "<hr>";
    
            
            
        //$o .= apply_filters( 'the_content', $content );
    }
 
    // end box
    $o .= '</div>';
 
    // return output
    return ;
}
 
/**
 * Central location to create all shortcodes.
 */
function wporg_shortcodes_init() {
    add_shortcode( 'wporg', 'wporg_shortcode' );
}
 
add_action( 'init', 'wporg_shortcodes_init' );