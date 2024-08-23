<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <style>
        .reset-password-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

.reset-password-container h1 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #34495e;
}

.reset-password-container p {
    margin-bottom: 20px;
    font-size: 1rem;
    color: #7f8c8d;
}

.reset-password-container label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #34495e;
}

.reset-password-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 1rem;
}

.reset-password-container .reset-button {
    background-color: #3498db;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1rem;
    width: 100%;
}

.reset-password-container .reset-button:hover {
    background-color: #2980b9;
}

.success-message {
    color: #27ae60;
    font-size: 1rem;
    margin-bottom: 20px;
}

    </style>
    <div class="reset-password-container">
        <h1>Reset Password</h1>
        <?php if(session('true')): ?>
            <p class="success-message"><?php echo e(session('true')); ?></p>
        <?php endif; ?>
        <?php if(session('false')): ?>
            <p><?php echo e(session('false')); ?></p>
        <?php endif; ?>
        <div>
            <p>Enter your email so we can send you a reset link</p>
            <form action="<?php echo e(route('password.email')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <button type="submit" class="reset-button">Send</button>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\gndja\Desktop\project\resources\views/auth/forgot-password.blade.php ENDPATH**/ ?>