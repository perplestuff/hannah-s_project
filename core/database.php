<?php
class connect
{
	public static function make($conf)
	{
		try {
			return new PDO(
				$conf['connection'].';dbname='.$conf['name'],
				$conf['username'],
				$conf['password'],
				$conf['options']
			);
		} catch (PDO $e) {
			die($e->GetMessage());
		}
	}
}
class query
{
	protected $pdo;
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	function db_query_get($sql)
	{
		try {
			$statement = $this->pdo->prepare($sql);
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_OBJ);
		} catch (exeption $e) {
			throw new Exception('Database failed, please report this to the administrator.');
		}
	}
	function db_query_set($sql)
	{
		try {
			$statement = $this->pdo->prepare($sql);
			$statement->execute();
		} catch (exeption $e) {
			throw new Exception('Database failed, please report this to the administrator.');
		}
	}
	function db_query_insert($table, $param)
	{
        $sql = sprintf(
        'INSERT INTO %s (%s) VALUES (%s);',
        $table,
        implode(',', array_keys($param)),
        ':'.implode(',:', array_keys($param))
      );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($param);
        } catch (Exception $e) {
            throw new Exception('Failed to send data, please report this to the administrator.');
        }
	}
}
?>
