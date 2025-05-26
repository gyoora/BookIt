<?php
	class rotas
	{
		private array $rotas = array();
		
		public function get(string $nome, array $dados)
		{
			$this->rotas['GET'][$nome] = $dados;
		}
		public function post(string $nome, array $dados)
		{
			$this->rotas['POST'][$nome] = $dados;
		}
		public function verificar_rota(string $metodo, string $uri)
		{
			if(isset($this->rotas[$metodo][$uri]))
			{
				$dados_rota = $this->rotas[$metodo][$uri];
				$classe = $dados_rota[0];
				$metodo = $dados_rota[1];
				$obj = new $classe();
				return $obj->$metodo();
			}
			else
			{
				echo "Rota Inválida";
			}
		}
	}//fim da classe
	$route = new Rotas();
	$route->get("/", [LandingpageController::class, "landingpage"]);
	$route->get("/login", [BookItController::class, "login"]);
	$route->post("/login", [BookItController::class, "login"]);
	$route->get("/signUp", [BookItController::class, "signUp"]);
	$route->post("/signUp", [BookItController::class, "signUp"]);
	$route->get("/dashboard", [BookItController::class, "initialPage"]);
	$route->post("/dashboard", [BookItController::class, "initialPage"]);
	$route->get("/bookshelf", [BookItController::class, "mostrarLivrosLidos"]);
	$route->get("/meu_perfil", [BookItController::class, "perfil"]);
	$route->get("/logOut", [BookItController::class, "sair"]);
	$route->get("/logOutAction", [BookItController::class, "sairAction"]);

?>