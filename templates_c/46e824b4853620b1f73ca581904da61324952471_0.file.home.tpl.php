<?php
/* Smarty version 4.2.1, created on 2022-10-15 04:45:25
  from 'C:\xampp\htdocs\proyectos\negro\templetes\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a1ec52a8632_58838265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e824b4853620b1f73ca581904da61324952471' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\negro\\templetes\\home.tpl',
      1 => 1665801811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
    'file:templetes/addDisco.tpl' => 1,
    'file:templetes/footer.tpl' => 1,
  ),
),false)) {
function content_634a1ec52a8632_58838265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>discos</h1>

<div class="container"></div>

<?php $_smarty_tpl->_subTemplateRender("file:templetes/addDisco.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div  class="discos">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discos']->value, 'disco');
$_smarty_tpl->tpl_vars['disco']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
$_smarty_tpl->tpl_vars['disco']->do_else = false;
?>
            <div class="disco">
                <ul>
                    <div class="datos_container">
                        <li class="datos_dico"><?php echo $_smarty_tpl->tpl_vars['disco']->value->titulo;?>
</li>
                        <li class="datos_dico"><?php echo $_smarty_tpl->tpl_vars['disco']->value->artista;?>
</li>
                        <li class="datos_dico"><?php echo $_smarty_tpl->tpl_vars['disco']->value->anio;?>
</li>
                        <li class="datos_dico"><?php echo $_smarty_tpl->tpl_vars['disco']->value->genero;?>
</li>
                    </div>
                    <div class="button_container">
                    <?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?>
                        <li><button class='btn_discos'><a href='delete/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
' >Borrar</a></button></li>
                        <li><button class='btn_discos'><a href='showEdit/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
'>editar</a></button></li>
                        <li><button class='btn_discos'><a href='showMore/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
'>ver mas</a></button></li>
                        <li><button class='btn_discos'><a href='showByGeneros/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id_genero;?>
'>ver por genero </a></button></li>
                    <?php }?>
                    </div>
                </ul>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>    

</div>
<?php $_smarty_tpl->_subTemplateRender("file:templetes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}