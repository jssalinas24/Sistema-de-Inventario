function validar1(form){
  
    // Valida Formulario Cliente 	
    if(form.idCliente.value.length==0)
        {
          alert("Digite El Numero de Identificacion");
          form.idCliente.focus();
          return(false);
        }
        var letra="0123456789";
        var cadena=form.idCliente.value;
        var valida=true;
  
        for(i=0;i<cadena.length; i++)
          {
           
                ch=cadena.charAt(i);
                 for(j=0; j<letra.length; j++)
                 if(ch==letra.charAt(j))
                 break;
                 if(j==letra.length)
                   {
                     valida = false;
                  break;
                  break;
                }
             }
         if(!valida)
                  {
                     alert("Digite Solo Números en el campo Identificacion");
                    form.idCliente.focus();
                    return (false);
                    }
        
      
       if(form.tipoDocCliente.length==0)
        {
          alert("Seleccione el tipo de Documento de Identificacion");
          form.tipoDocCliente.focus();
          return(false);
        }
  
    if(form.nombreCliente.value.length==0)
        {
          alert("Digite El Nombre del Cliente");
          form.nombreCliente.focus();
          return(false);
        }
        var letra="abcdefeghijklmnopqrstuvwxyz + ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var cadena=form.nombreCliente.value;
        var valida=true;
  
        for(i=0;i<cadena.length; i++)
          {
           
                ch=cadena.charAt(i);
                 for(j=0; j<letra.length; j++)
                 if(ch==letra.charAt(j))
                 break;
                 if(j==letra.length)
                   {
                     valida = false;
                  break;
                  break;
                }
             }
         if(!valida)
                  {
                     alert("Digite Solo Letras en el campo Nombre");
                    form.nombreCliente.focus();
                    return (false);
                    }
        
    
    if(form.apellidoCliente.value.length==0)
        {
          alert("Digite El Apellido del Cliente");
          form.apellidoCliente.focus();
          return(false);
        }
        var letra="abcdefeghijklmnopqrstuvwxyz + ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var cadena=form.apellidoCliente.value;
        var valida=true;
  
        for(i=0;i<cadena.length; i++)
          {
           
                ch=cadena.charAt(i);
                 for(j=0; j<letra.length; j++)
                 if(ch==letra.charAt(j))
                 break;
                 if(j==letra.length)
                   {
                     valida = false;
                  break;
                  break;
                }
             }
         if(!valida)
                  {
                     alert("Digite Solo Letras en el campo Apellido");
                    form.apellidoCliente.focus();
                    return (false);
                    }
    
    if(form.telefonoCliente.value.length==0)
        {
          alert("Digite El telefóno del Cliente");
          form.telefonoCliente.focus();
          return(false);
        }
        var letra="0123456789";
        var cadena=form.telefonoCliente.value;
        var valida=true;
  
        for(i=0;i<cadena.length; i++)
          {
           
                ch=cadena.charAt(i);
                 for(j=0; j<letra.length; j++)
                 if(ch==letra.charAt(j))
                 break;
                 if(j==letra.length)
                   {
                     valida = false;
                  break;
                  break;
                }
             }
         if(!valida)
                  {
                     alert("Digite Solo Números en el campo Número Teléfonico");
                    form.telefonoCliente.focus();
                    return (false);
                    }
        
      
       
    
    if(form.correoCliente.value.length==0)
        {
          alert("Digite El Correo del Cliente");
          form.correoCliente.focus();
          return(false);
        }
  
  
     var confirmar=confirm("Desea Realizar Los Cambios [Aceptar] o [Cancelar]");
     if(confirmar==false)
         {
         return(false);
          }
       return (true);
   
   
  }
   // Valida Formulario Proveedor
  function validar2(form){
       
        
    if(form.nombreProveedor.value.length==0)
        {
          alert("Digite El Nombre del Proveedor");
          form.nombreProveedor.focus();
          return(false);
        }
        var letra="abcdefeghijklmnopqrstuvwxyz + ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var cadena=form.nombreProveedor.value;
        var valida=true;
  
        for(i=0;i<cadena.length; i++)
          {
           
                ch=cadena.charAt(i);
                 for(j=0; j<letra.length; j++)
                 if(ch==letra.charAt(j))
                 break;
                 if(j==letra.length)
                   {
                     valida = false;
                  break;
                  break;
                }
             }
         if(!valida)
                  {
                     alert("Digite Solo Letras en el campo Nombre");
                    form.nombreProveedor.focus();
                    return (false);
                    }
  
    if(form.direccionProveedor.value.length==0)
      {
        alert("Digite La Direccion del Proveedor");
        form.direccionProveedor.focus();
        return(false);
      }
  
    if(form.telefonoProveedor.value.length==0)
      {
        alert("Digite el Telefono del Proveedor");
        form.telefonoProveedor.focus();
        return(false);
      }
      var letra="0123456789";
      var cadena=form.telefonoProveedor.value;
      var valida=true;
  
      for(i=0;i<cadena.length; i++)
        {
         
              ch=cadena.charAt(i);
               for(j=0; j<letra.length; j++)
               if(ch==letra.charAt(j))
               break;
               if(j==letra.length)
                 {
                   valida = false;
                break;
                break;
              }
           }
       if(!valida)
                {
                   alert("Digite Solo Números en el campo Número Teléfonico");
                  form.telefonoProveedor.focus();
                  return (false);
                  }
  
    if(form.correoProveedor.value.length==0)
      {
        alert("Digite El Correo del Proveedor");
        form.correoProveedor.focus();
        return(false);
      }
  
     var confirmar=confirm("Desea Realizar Los Cambios [Aceptar] o [Cancelar]");
     if(confirmar==false)
         {
         return(false);
          }
       return (true);
   
   
  }
  
  //Validacion Categorias
  function validar3(form){
      if(form.nombreCategorias.value.length==0)
        {
          alert("Digite El Nombre el Nombre de la Categoria");
          form.nombreCategorias.focus();
          return(false);
        }
        var letra="abcdefeghijklmnopqrstuvwxyz + ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var cadena=form.nombreCategorias.value;
        var valida=true;
  
        for(i=0;i<cadena.length; i++)
          {
           
                ch=cadena.charAt(i);
                 for(j=0; j<letra.length; j++)
                 if(ch==letra.charAt(j))
                 break;
                 if(j==letra.length)
                   {
                     valida = false;
                  break;
                  break;
                }
             }
         if(!valida)
                  {
                     alert("Digite Solo Letras en el campo Nombre");
                    form.nombreCategorias.focus();
                    return (false);
                    }
          var confirmar=confirm("Desea Realizar Los Cambios [Aceptar] o [Cancelar]");
          if(confirmar==false)
                        {
                        return(false);
                         }
                      return (true);
  
  }
  
  //validaciones Productos
  function validar4(form){
  
  
      if(form.nombreProductos.value.length==0)
        {
          alert("Digite El Nombre el Nombre del Producto");
          form.nombreProductos.focus();
          return(false);
        }
  
        var letra="abcdefeghijklmnopqrstuvwxyz + ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var cadena=form.nombreProductos.value;
        var valida=true;
  
        for(i=0;i<cadena.length; i++)
          {
           
                ch=cadena.charAt(i);
                 for(j=0; j<letra.length; j++)
                 if(ch==letra.charAt(j))
                 break;
                 if(j==letra.length)
                   {
                     valida = false;
                  break;
                  break;
                }
             }
         if(!valida)
                  {
                     alert("Digite Solo Letras en el campo Nombre");
                    form.nombreProductos.focus();
                    return (false);
                    }
      
         
          if(form.idCategorias.value.length==0)
                  {
                    alert("Seleccione el nombre de la Categoria");
                    form.idCategorias.focus();
                    return(false);
                  }
        
          if(form.valorProductos.value.length==0)
                  {
                    alert("Digite El Valor del Producto");
                    form.valorProductos.focus();
                    return(false);
                  }
                /*  var letra="0123456789";
                  var cadena=form.valorProductos.value;
                  var valida=true;
            
                  for(i=0;i<cadena.length; i++)
                    {
                     
                        ch=cadena.charAt(i);
                         for(j=0; j<letra.length; j++)
                         if(ch==letra.charAt(j))
                         break;
                         if(j==letra.length)
                         {
                           valida = false;
                          break;
                          break;
                        }
                     }
                   if(!valida)
                            {
                             alert("Digite Solo Numeros en el campo Valor");
                            form.valorProductos.focus();
                            return (false);
                            }
                
  */
  
  
  
  
      var confirmar=confirm("Desea Realizar Los Cambios [Aceptar] o [Cancelar]");
      if(confirmar==false)
                    {
                    return(false);
                     }
                  return (true);
  
                    
  }