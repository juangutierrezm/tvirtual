<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Entity\Rol;
use Admin\Entity\Usuario;

class RolController extends AbstractActionController
{
    public function listarAction()
    {   //creamos una conexion
         $objectManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');
        //Listar todos datos
        $claseRol = $objectManager->getRepository('Admin\Entity\Rol');
        $rol = $claseRol->findAll();//recupera todos los datos
 //       print_r($rol);
        $valores = array("titulo"=>'Listado de roles',
        "datos"=>$rol);
        return new ViewModel($valores);
        
         //insertar datos a Rol
        /*$rol = new Rol();
        $rol->setNombre('ARCANGEL');
        $objectManager->persist($rol);        
        $objectManager->flush();
        echo $rol->getId();
        echo ' - ';
        echo $rol->getNombre();
        */
        //buscar por identificador
        /*$rol = $objectManager->find('Admin\Entity\Rol', 10);
        //modificar un campo
        $rol->setNombre('CAJERO');        
        $objectManager->flush();
        echo $rol->getId();
        echo '-'.$rol->getNombre();
        */
         /*
        //ELIMINAR
        $rol = $objectManager->find('Admin\Entity\Rol', 14);
        $objectManager->remove($rol);
        $objectManager->flush();
        echo $rol->getNombre().' fue eliminado de la bd';
        */
 
        //guardar en una sociacion de clases de muchos a uno
        
        //crear usuario
        /*$usuario = new Usuario();
        $usuario->setNombrecompleto('JUAN PEREZ');
        $usuario->setUser('jj');
        $usuario->setPassword('123456');
        $usuario->setEstado('activo');   
        $objectManager->persist($usuario);
        */
        //obtener objeto rol a asociar
       /* $rol = $objectManager->find('Admin\Entity\Rol', 2);
        $usuario->setRol($rol);//asignar el objeto asociado      
        $objectManager->flush();
        echo $usuario->getNombrecompleto().
                'fue guardado correctamente';
        
        */
        
        
        
    }
}
