<?php





	//Define 
define( 'DIRECTORY', '/MEDART' );
define( 'PATH', 'http://' . $_SERVER['SERVER_NAME'] . '' . DIRECTORY ); 
define( 'PATH_ADMIN', PATH . '/admin' ); 
define( 'PATH_SHOP', PATH . '/shop' );
define( 'PATH_CUSTOMER', PATH . '/customer' );
class Database extends Exception {
	
		// Setting up variables
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $db = 'audiometry';
	
	private $dbn;
	
		// Defining constructor
	public function __construct() {
		$this->connect();
	}
	
		// Database connection
	public function connect() {
		
		try {
				//Crearing database source name 
			$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
			
				//Creating object in PDO
			$this->dbn = new PDO($dsn, $this->username, $this->password);
			$this->dbn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->dbn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			
			return true;
		} catch( PDOException $e ) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}
		
	}
	
	public function execute_query( $sql, $array = NULL ) {
		
		try {
			$stmnt = $this->dbn->prepare($sql);
			$istrue  = $stmnt->execute($array);
			
			if( $istrue ) {
				return true;
			} else {
				return false;
			}
		}  catch (PDOException $e) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}
		
	}
	


		// cust function new nr  added
		public function execute_query_return_id( $sql, $array = NULL ) {
			try {
				$statement = $this->dbn->prepare($sql);
				$big_data  = $statement->execute($array);
				$retunrId = $this->dbn->lastInsertId(); 
				if( $big_data ) {
					return $retunrId;
				} else {
					return false;
				}
			}  catch (PDOException $e) {
				echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
			}
		}
			
	public function display( $sql, $array = NULL ) {
		
		try {
			$stmnt = $this->dbn->prepare($sql);
			$stmnt->execute( $array );

			return $istrue = $stmnt->fetchAll();
		}  catch (PDOException $e) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}
	}
}	
?>