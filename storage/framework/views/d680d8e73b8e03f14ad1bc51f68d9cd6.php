<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Document</title>
  <style>
    :root {
  --primary-color: #4a90e2;
  --secondary-color: #f39c12;
  --background-color: #f4f4f4;
  --text-color: #333;
  --nav-height: 60px;
}

body {
  font-family: 'Roboto', Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: var(--background-color);
  color: var(--text-color);
}

nav {
  background-color: var(--primary-color);
  height: var(--nav-height);
  padding: 0 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

nav a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}

nav a:hover {
  color: var(--secondary-color);
}

nav ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
  display: flex;
}

nav ul li {
  margin-left: 1.5rem;
}

nav ul li a {
  color: white;
  text-decoration: none;
  font-size: 0.9rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

nav button {
  background-color: var(--secondary-color);
  border: none;
  color: white;
  cursor: pointer;
  font-size: 0.9rem;
  padding: 0.5rem 1rem;
  border-radius: 20px;
  transition: background-color 0.3s ease;
}

nav button:hover {
  background-color: #e67e22;
}

nav div[x-show="open"] {
  position: absolute;
  top: var(--nav-height);
  right: 2rem;
  background-color: white;
  padding: 1rem;
  border-radius: 4px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  min-width: 150px;
}

nav div[x-show="open"] a,
nav div[x-show="open"] button {
  display: block;
  color: var(--text-color);
  text-decoration: none;
  margin-bottom: 0.8rem;
  transition: color 0.3s ease;
}

nav div[x-show="open"] a:hover,
nav div[x-show="open"] button:hover {
  color: var(--primary-color);
}

nav div[x-show="open"] form {
  margin: 0;
}

.fa-solid {
  margin-right: 0.5rem;
}

@media (max-width: 768px) {
  nav {
    flex-direction: column;
    height: auto;
    padding: 1rem;
  }

  nav ul {
    margin-top: 1rem;
  }

  nav ul li {
    margin-left: 0;
    margin-right: 1rem;
  }

  nav div[x-show="open"] {
    position: static;
    box-shadow: none;
    padding: 1rem 0;
  }
}
  </style>
</head>
<body>
  <nav>
    <a href="<?php echo e(route('home')); ?>"><i class="fa-solid fa-user"></i></a>
    <?php if(auth()->guard()->guest()): ?>
    <ul>
      <li><a href="<?php echo e(route('view.register')); ?>">Register</a></li>
      <li><a href="<?php echo e(route('view.login')); ?>">Login</a></li>
    </ul>
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
    <div x-data="{open:false}">
      <button @click="open =!open"><?php echo e(auth()->user()->username); ?> &darr;</button>
      <div x-show="open">
        <a href="<?php echo e(route('view.profile')); ?>">Profile</a>
        <form action="<?php echo e(route('logout')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <button>Logout</button>
        </form>
      </div>
    </div>
    <?php endif; ?>
  </nav>
  <main>
    <?php echo e($slot); ?>

  </main>
</body>
</html>
<?php /**PATH C:\Users\gndja\Desktop\project\resources\views/components/layout.blade.php ENDPATH**/ ?>