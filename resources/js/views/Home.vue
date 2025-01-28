<template>
  <nav>
    <div class="header">
        <img src="https://via.placeholder.com/100x30?text=foodpanda" alt="Foodpanda">
        <div class="header-right">
            <button>Login</button>
            <button>Sign Up</button>
        </div>
    </div>

    <!-- Address Bar -->
    <div class="address-bar">
        📍 New Address: Select your address
    </div>

    <!-- Restaurant Section -->
    <div class="restaurant-section">
        <img src="https://via.placeholder.com/80" alt="Restaurant Image">
        <div class="restaurant-info">
            <h1>Restaurant Name (II)</h1>
            <p>Discount: $0.69 <del>$3.50</del></p>
        </div>
    </div>

    <!-- Tabs Section -->
    <div class="tabs">
        <div class="tab active">All Items</div>
        <div class="tab">Coffee</div>
        <div class="tab">Tea</div>
        <div class="tab">Juices</div>
        <div class="tab">Snacks</div>
        <div class="tab">Desserts</div>
    </div>

    <!-- Search Bar -->
    <div class="search-bar">
        <input type="text" placeholder="🔍 Search items...">
    </div>

    <!-- Menu Items -->
    <div class="menu-items">
        <div class="menu-category">
            <h2>កាហ្វេបុរាណ (Coffee)</h2>

            <!-- Item 1 -->
            <div class="menu-item">
                <img src="https://via.placeholder.com/80" alt="Item Image">
                <div class="item-details">
                    <h3>កាហ្វេខន់ដុះ</h3>
                    <p>Rich, strong black coffee served cold.</p>
                    <span>$1.75</span>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="menu-item">
                <img src="https://via.placeholder.com/80" alt="Item Image">
                <div class="item-details">
                    <h3>កាហ្វេទឹកដោះគោ</h3>
                    <p>Milk coffee with a sweet and creamy flavor.</p>
                    <span>$1.50</span>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="menu-item">
                <img src="https://via.placeholder.com/80" alt="Item Image">
                <div class="item-details">
                    <h3>តែខ្មៅ</h3>
                    <p>Traditional black tea brewed for rich flavor.</p>
                    <span>$1.50</span>
                </div>
            </div>
        </div>
    </div>
    </nav>
</template>

<script>

export default {
    data() {
        return {
            items: [
                { label: 'New', icon: 'pi pi-plus' },
                { label: 'Search', icon: 'pi pi-search' }
            ]
        };
    },
    name: 'Home',
};
</script>

<style>
/* General Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

a {
    text-decoration: none;
    color: inherit;
}

/* Header */
.header {
    background-color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.header img {
    height: 30px;
}

.header-right {
    display: flex;
    align-items: center;
}

.header-right button {
    margin-left: 10px;
    padding: 6px 10px;
    background-color: #ff2b85;
    border: none;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
}

/* Address Bar */
.address-bar {
    text-align: center;
    padding: 10px;
    background-color: #f1f1f1;
    font-size: 0.9em;
    color: #666;
}

/* Restaurant Section */
.restaurant-section {
    display: flex;
    align-items: center;
    padding: 20px;
    background-color: #fff;
}

.restaurant-section img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 10px;
    margin-right: 15px;
}

.restaurant-info h1 {
    margin: 0;
    font-size: 1.5em;
}

.restaurant-info p {
    margin: 5px 0;
    color: #ff2b85;
}

/* Tabs Section */
.tabs {
    display: flex;
    justify-content: space-around;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
}

.tab {
    color: #666;
    cursor: pointer;
}

.tab:hover {
    color: #ff2b85;
}

.tab.active {
    color: #ff2b85;
    font-weight: bold;
}

/* Search Bar */
.search-bar {
    display: flex;
    justify-content: center;
    padding: 20px;
}

.search-bar input {
    width: 80%;
    max-width: 600px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 20px;
    outline: none;
}

/* Menu Items */
.menu-items {
    padding: 20px;
}

.menu-category {
    margin-bottom: 20px;
}

.menu-category h2 {
    margin-bottom: 10px;
    color: #999;
    font-size: 1.2em;
}

.menu-item {
    display: flex;
    align-items: center;
    background: #fff;
    border-radius: 10px;
    margin-bottom: 15px;
    padding: 10px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
}

.menu-item:hover {
    transform: scale(1.02);
}

.menu-item img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 10px;
    margin-right: 15px;
}

.item-details {
    flex-grow: 1;
}

.item-details h3 {
    margin: 0 0 5px;
    font-size: 1.1em;
}

.item-details p {
    margin: 0;
    font-size: 0.9em;
    color: #777;
}

.item-details span {
    color: #000;
    font-weight: bold;
}
</style>