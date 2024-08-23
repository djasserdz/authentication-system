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
        .email-verification {
    text-align: center;
    padding: 20px;
}

.email-verification h1 {
    font-size: 2rem;
    color: #34495e;
    margin-bottom: 20px;
}

.email-verification p {
    font-size: 1rem;
    color: #7f8c8d;
    margin-bottom: 30px;
}

.resend-button {
    background-color: #3498db;
    color: #ffffff;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.resend-button:hover {
    background-color: #2980b9;
}

    </style>
    <div class="email-verification">
        <h1>Email Verification</h1>
        <p>We have sent you an email verification link.</p>
        <?php if(session('true')): ?>
            <p><?php echo e(session('true')); ?></p>
        <?php endif; ?>
        <form action="<?php echo e(route('verification.send')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <p>Didn't get the email?</p>
            <button type="submit" class="resend-button">Send again!</button>
        </form>
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
<?php /**PATH C:\Users\gndja\Desktop\project\resources\views/auth/verify-email.blade.php ENDPATH**/ ?>