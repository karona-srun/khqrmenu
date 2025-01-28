<template>
    <div>
        <router-link to="/">Home</router-link>
        <h1>Welcome to SignIN</h1>
        
        <form @submit.prevent="handleSubmit" class="signin-form">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" v-model="username" required />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" v-model="password" required />
            </div>
            <button type="submit">Sign In</button>
        </form>
    </div>
</template>

<script>
export default {
    name: 'SignIn',
    data() {
        return {
            username: '',
            password: ''
        };
    },
    methods: {
        handleSubmit() {
            // Handle sign-in logic here
            console.log('Username:', this.username);
            console.log('Password:', this.password);
        }
    }
};
</script>

<style scoped>
.signin-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

.signin-form div {
    margin-bottom: 15px;
}

.signin-form label {
    display: block;
    margin-bottom: 5px;
}

.signin-form input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.signin-form button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.signin-form button:hover {
    background-color: #0056b3;
}
</style>