<?php

$menumontado = array();
array_push($menumontado, utf8_decode("<a href='" . BASEURL . "'>In&iacute;cio</a>"));

//Monta usuario
$menuusu = "<a class='item' href='#'>Usu&aacute;rio</a>";
$menuusu .= "<ul> ";
$menuusu .= " <li> <a href='?m=usuarios&t=incluir'>Cadastrar</a></li> ";
$menuusu .= " <li> <a href='?m=usuarios&t=listar'>Listar</a></li> ";
$menuusu .= " </ul> ";
array_push($menumontado, utf8_decode($menuusu));

//Monta concursos
$menuusu = "<a class='item' href='#'>Concursos</a>";
$menuusu .= "<ul> ";
$menuusu .= " <li> <a href='?m=concursos&t=categoria'>Categorias</a></li> ";
$menuusu .= " <li> <a href='?m=concursos&t=listar'>Listar</a></li> ";
$menuusu .= " <li> <a href='?m=organizadoras&t=or_listar'>Organizadoras</a></li> ";
$menuusu .= " </ul> ";
array_push($menumontado, utf8_decode($menuusu));

//Monta noticias
$menuusu = "<a class='item' href='#'>Noticias</a>";
$menuusu .= "<ul> ";
$menuusu .= " <li> <a href='?m=noticias&t=incluir'>Cadastrar</a></li> ";
$menuusu .= " <li> <a href='?m=noticias&t=listar'>Listar</a></li> ";
$menuusu .= " </ul> ";
array_push($menumontado, utf8_decode($menuusu));

//Monta dicas
$menuusu = "<a class='item' href='#'>Dicas</a>";
$menuusu .= "<ul> ";
$menuusu .= " <li> <a href='?m=dicas&t=categoria'>Categorias</a></li> ";
$menuusu .= " <li> <a href='?m=dicas&t=listar'>Listar</a></li> ";
$menuusu .= " </ul> ";
array_push($menumontado, utf8_decode($menuusu));

//Monta video aula
$menuusu = "<a class='item' href='#'>Video Aulas</a>";
$menuusu .= "<ul> ";
$menuusu .= " <li> <a href='?m=videoaulas&t=pr_listar'>Listar Professor</a></li> ";
$menuusu .= " <li> <a href='?m=videoaulas&t=mv_listar'>Listar Materias</a></li> ";
$menuusu .= " <li> <a href='?m=videoaulas&t=va_listar'>Listar</a></li> ";
$menuusu .= " </ul> ";
array_push($menumontado, utf8_decode($menuusu));

//Monta Provas
$menuusu = "<a class='item' href='#'>Provas</a>";
$menuusu .= "<ul> ";
$menuusu .= " <li> <a href='?m=provas&t=categoria'>Categorias</a></li> ";
$menuusu .= " <li> <a href='?m=provas&t=listar'>Listar</a></li> ";
$menuusu .= " </ul> ";
array_push($menumontado, utf8_decode($menuusu));

//Monta Campanhas AD
$menuusu = "<a class='item' href='#'>Gerencia AD</a>";
$menuusu .= "<ul> ";
$menuusu .= " <li> <a href='?m=ad&t=incluir'>Cadastrar</a></li> ";
$menuusu .= " <li> <a href='?m=ad&t=listar'>Listar</a></li> ";
$menuusu .= " </ul> ";
array_push($menumontado, utf8_decode($menuusu));
//
//Monta Gerencia Email
$menuusu = "<a class='item' href='#'>Gerencia Email</a>";
$menuusu .= "<ul> ";
$menuusu .= " <li> <a href='?m=emails&t=listar'>Listar</a></li> ";
$menuusu .= " <li> <a href='?m=emails&t=enviaremail'>Enviar Emails</a></li> ";
$menuusu .= " </ul> ";
array_push($menumontado, utf8_decode($menuusu));

//
//Monta Gerencia Email
$menuusu = "<a class='item' href='#'>Framework</a>";
$menuusu .= "<ul> ";
$menuusu .= " <li> <a href='?m=framework&t=frwtipoitem_categoria'>Tipo de Item</a></li> ";
$menuusu .= " </ul> ";
array_push($menumontado, utf8_decode($menuusu));

array_push($menumontado, utf8_decode("<a href='?logoff=true'>Sair</a>"));

$smarty->assign('menu', $menumontado);
?>