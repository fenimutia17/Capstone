<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .feedback-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .feedback-card p {
            margin: 5px 0;
        }
        .feedback-card strong {
            color: #333;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Feedback and Reviews</h1>

    <?php if($feedbacks && $feedbacks->isNotEmpty()): ?>
        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="feedback-card">
                <p><strong>Product Category:</strong> <?php echo e($feedback->product); ?></p>
                <p><strong>Skin Type:</strong> <?php echo e($feedback->skin_type); ?></p>
                <p><strong>Condition:</strong> <?php echo e($feedback->conditions); ?></p>
                <p><strong>Rating:</strong> <?php echo e($feedback->rating); ?> / 5</p>
                <p><strong>Review:</strong> <?php echo e($feedback->review); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>No feedbacks available yet.</p>
    <?php endif; ?>

    <br>
    <a href="<?php echo e(route('recommendation.form')); ?>">Back to Recommendation Form</a>
</body>
</html>
<?php /**PATH C:\laragon\www\GlowGenius\resources\views/feedback/list.blade.php ENDPATH**/ ?>