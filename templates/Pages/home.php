<?php 
$this->set('title', __('Minderest'));
$this->set('pageHeader', __('Inicio'));
$this->set('sidebarMenu', 'Inicio');
?>

<div class="container">
    <h1><?=__('Diagrama EER')?></h1>

    <?=$this->Html->image('/img/eer-minderest.png', ['alt' => __('Diagrama EER')])?>

    <p>En el supuesto Minderest tiene una tabla de productos y otra de clientes.</p>

    <p>Los productos de Minderest se pueden relacionar con muchos clientes a traves de la tabla productos_clientes.</p>
    
    <p>Los clientes no se pueden relacionar más de una vez con el mismo producto.</p>
    
    <p>Los clientes pueden definir (o sobreescribir) los atributos de un producto (nombre, precio, codigo, etc...) en la tabla productos_clientes.</p>


    <hr>


    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel dapibus massa. Nam velit metus, commodo non orci at, vehicula tristique turpis. Nulla facilisi. Nunc vitae eros risus. Phasellus vestibulum nisi purus, a efficitur sem pellentesque vel. Nunc gravida, tellus vel dictum pharetra, dolor nulla suscipit risus, non pharetra mi urna iaculis metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eu ex aliquam, mollis lacus a, semper urna. Phasellus vehicula molestie metus, vitae pharetra ex varius a. Suspendisse tincidunt orci sed tempor tristique. Fusce ut molestie lacus. Praesent ipsum elit, dapibus sollicitudin lobortis eu, suscipit id felis.</p>

    <p>Sed eu bibendum lacus. Morbi a eleifend elit. Sed ultricies elit eu leo iaculis, sit amet venenatis risus mollis. Morbi ac metus gravida, faucibus eros tincidunt, accumsan arcu. Sed eleifend commodo lectus id ultrices. Curabitur sodales nisl dui, vitae sagittis sem aliquam non. Praesent ac ex turpis. Curabitur posuere pretium magna vitae rhoncus. Morbi nec venenatis tortor, vel tincidunt felis. Mauris suscipit, nibh ut maximus scelerisque, enim sem pretium nulla, et interdum nulla tortor id libero. Sed a porttitor dolor. Duis mattis sapien ut est ullamcorper euismod.</p>

    <p>Nunc pretium sit amet ligula sit amet vehicula. Morbi a accumsan mi, quis varius magna. Phasellus id magna id lorem eleifend suscipit vel sit amet eros. Pellentesque libero diam, sagittis at lectus sit amet, posuere convallis odio. Nulla facilisi. Mauris ac bibendum neque. Fusce et tellus elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum vitae purus pellentesque, facilisis augue ut, pharetra tortor. Phasellus viverra lectus eget est aliquam, eu scelerisque purus auctor. Nam facilisis et neque eget tincidunt. Aenean volutpat orci quam, eget eleifend orci mollis in. Fusce commodo eu dui vitae tempus.</p>

    <p>Nulla venenatis massa non molestie ultrices. In enim mauris, ullamcorper et pretium id, ornare eget orci. Proin a mauris velit. Maecenas fermentum nisi ac neque fringilla ullamcorper. Quisque ultrices sed metus vitae mattis. Sed nec consectetur nibh. Phasellus efficitur ut neque vitae pharetra. Aenean congue nec enim ut rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum cursus tempor felis, a egestas turpis molestie non. Aliquam id turpis massa. Morbi sit amet augue malesuada, porttitor neque a, scelerisque tortor. Phasellus eu mauris ligula. Integer molestie justo id vestibulum tristique. Suspendisse nec massa nec velit auctor tristique.</p>

    <p>Aliquam iaculis ullamcorper tellus eget finibus. Nunc ac erat posuere, posuere mi eu, dictum ante. Nam varius euismod facilisis. Maecenas facilisis ante hendrerit, rutrum metus aliquam, suscipit ligula. Quisque pharetra lobortis enim. Curabitur nec augue ac justo auctor pulvinar. Curabitur interdum rutrum odio, vitae convallis purus. Vestibulum ac justo sit amet ipsum tempus venenatis in sed ipsum. Proin vel condimentum lacus, eu efficitur arcu. Proin non laoreet neque, eu mattis nibh. Phasellus gravida, erat vel semper tempor, sem enim consectetur diam, vel sodales dui lectus sed tellus. Nunc tincidunt velit odio, et porta ex sodales quis. Nunc sodales, purus sed convallis lacinia, leo libero pulvinar eros, ac auctor diam sapien consectetur dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam sit amet aliquam nulla. Pellentesque porta facilisis elit, congue pulvinar mi faucibus quis. </p>

</div>