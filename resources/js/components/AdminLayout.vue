<template>
    <div class="d-flex">
      <aside class="bg-light p-3" style="width: 250px;">
        <h5>Admin Panel</h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <router-link to="/admin/dashboard" class="nav-link">Dashboard</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin/users" class="nav-link">Users</router-link>
          </li>
        </ul>
      </aside>
      <main class="flex-grow-1 p-3">
        <router-view />
      </main>
    </div>
  </template>
  

<script>
export default {
    name: 'AdminLayout',
};
</script>