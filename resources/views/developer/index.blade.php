<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer API Keys</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

<!-- ✅ Navbar -->
<header class="bg-[#028571] p-4 text-white flex justify-between items-center shadow-md">
    <h1 class="text-xl font-bold">Developer API Keys</h1>
    <nav>
        <a href="/" class="mr-4 hover:underline">Home</a>
        <a href="/developer" class="hover:underline">Developer</a>
    </nav>
</header>

<!-- ✅ Main Container -->
<div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-[#028571] mb-4">Manage Your API Keys</h2>

    <!-- ✅ Generate API Key Form -->
    <form id="generate-form" class="flex gap-2">
        <input type="text" id="key-name" placeholder="API Key Name" required
               class="border border-gray-300 p-2 flex-grow rounded-lg focus:ring focus:ring-[#028571]">
        <button type="submit" class="bg-[#028571] text-white px-4 py-2 rounded-lg hover:bg-green-700">
            Generate
        </button>
    </form>

    <!-- ✅ API Key List -->
    <h3 class="mt-6 text-lg font-semibold">Your API Keys</h3>
    <ul id="api-key-list" class="mt-2 space-y-2"></ul>
</div>

<script>
    const API_BASE_URL = "http://127.0.0.1:8000/api"; // ✅ Change if needed

    // ✅ Fetch API Keys
    async function fetchApiKeys() {
        const apiKey = localStorage.getItem("api_key");
        if (!apiKey) {
            document.getElementById("api-key-list").innerHTML = "<p class='text-gray-500'>No API Key Found. Generate one!</p>";
            return;
        }

        try {
            const response = await fetch(`${API_BASE_URL}/api-keys`, {
                method: "GET",
                headers: {
                    "X-API-KEY": apiKey,
                    "Accept": "application/json"
                }
            });

            if (!response.ok) {
                throw new Error("Invalid API Key.");
            }

            const keys = await response.json();
            let list = keys.map(key => `
                <li class="bg-gray-100 p-3 rounded-lg flex justify-between items-center shadow">
                    <span class="text-gray-700">${key.name} - <strong>Hidden for security</strong></span>
                    <button onclick="revokeApiKey(${key.id})" class="text-red-600 hover:text-red-800">Revoke</button>
                </li>`).join("");

            document.getElementById("api-key-list").innerHTML = list;
        } catch (error) {
            document.getElementById("api-key-list").innerHTML = `<p class='text-red-600'>${error.message}</p>`;
        }
    }

    // ✅ Generate API Key
    async function generateApiKey(event) {
        event.preventDefault();
        const name = document.getElementById("key-name").value.trim();
        if (!name) {
            alert("Please enter an API key name.");
            return;
        }

        try {
            const response = await fetch(`${API_BASE_URL}/generate-api-key`, {
                method: "POST",
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ name })
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.error || "Failed to generate API Key.");
            }

            alert("API Key generated: " + data.api_key + "\nSave it securely!");
            localStorage.setItem("api_key", data.api_key);
            fetchApiKeys();
        } catch (error) {
            alert(error.message);
        }
    }

    // ✅ Revoke API Key
    async function revokeApiKey(id) {
        const apiKey = localStorage.getItem("api_key");
        if (!apiKey) {
            alert("No API Key Found.");
            return;
        }

        try {
            const response = await fetch(`${API_BASE_URL}/api-keys/${id}`, {
                method: "DELETE",
                headers: {
                    "X-API-KEY": apiKey,
                    "Accept": "application/json",
                    "Content-Type": "application/json"
                }
            });

            if (!response.ok) {
                throw new Error("Failed to revoke API key.");
            }

            alert("API Key revoked successfully.");
            fetchApiKeys();
        } catch (error) {
            alert(error.message);
        }
    }

    // ✅ Event Listeners
    document.getElementById("generate-form").addEventListener("submit", generateApiKey);
    document.addEventListener("DOMContentLoaded", fetchApiKeys);
</script>

</body>
</html>
