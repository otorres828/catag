                            <!-- Modal -->
<div class="modal fade " id="modal-<?php echo $producto['id']; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                <?php echo $producto['name']; ?> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="<?=$producto['image'] ?>" style="display:block;margin:0 auto 0 auto;" width="100%" height="100%"alt="Imagen del producto">
                <hr>
                    <h6><?php echo $producto['description'];  ?> </h6>
                        <h6><?php "<br>" ?></h6>
                <hr>
                    <h6><?php echo $producto['price']; ?> $</h6>
            </div>
         </div>
    </div>
 </div>