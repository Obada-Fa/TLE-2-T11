<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer API Keys</title>
</head>
<body>
<div class="container">
    <h2>Developer API Keys</h2>

    <!-- Generate API Key Form -->
    <form id="generate-form">
        <input type="text" id="key-name" placeholder="API Key Name" required>
        <button type="submit">Generate API Key</button>
    </form>

    <h3>Your API Keys</h3>
    <ul id="api-key-list"></ul>
</div>

<script>
    // Function to fetch API keys from the backend on page load
    async function fetchApiKeys() {
        const apiKey = localStorage.getItem("api_key"); // Retrieve stored API key
        if (!apiKey) {
            document.getElementById("api-key-list").innerHTML = "<p>No API Key Found. Generate one!</p>";
            return;
        }

        const response = await fetch("/api/api-keys", {
            method: "GET",
            headers: {
                "X-API-KEY": apiKey,
                "Accept": "application/json"
            }
        });

        if (response.ok) {
            const keys = await response.json();
            let list = "";
            keys.forEach(key => {
                list += `<li>${key.name} - <strong>Hidden for security</strong>
                    <button onclick="revokeApiKey(${key.id})">Revoke</button>
                </li>`;
            });
            document.getElementById("api-key-list").innerHTML = list;
        } else {
            document.getElementById("api-key-list").innerHTML = "<p>Invalid API Key.</p>";
        }
    }

    // Function to generate a new API key
    async function generateApiKey(event) {
        event.preventDefault();
        const name = document.getElementById("key-name").value;

        const response = await fetch("/api/generate-api-key", {
            method: "POST",
            headers: {
                "Accept": "application/json",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ name: name })
        });

        if (response.ok) {
            const data = await response.json();
            alert("API Key generated: " + data.api_key + "\nSave it securely!");
            localStorage.setItem("api_key", data.api_key); // Store API key
            fetchApiKeys(); // ✅ Refresh API key list immediately after generating
        } else {
            alert("Failed to generate API Key.");
        }
    }

    // Function to revoke an API key
    async function revokeApiKey(id) {
        const apiKey = localStorage.getItem("api_key");
        if (!apiKey) return alert("No API Key Found.");

        const response = await fetch(`/api/api-keys/${id}`, {
            method: "DELETE",
            headers: {
                "X-API-KEY": apiKey,
                "Accept": "application/json",
                "Content-Type": "application/json"
            }
        });

        if (response.ok) {
            alert("API Key revoked successfully.");
            fetchApiKeys(); // ✅ Refresh API key list immediately after deletion
        } else {
            alert("Failed to revoke API key.");
        }
    }

    // Attach event listener to form for generating API keys
    document.getElementById("generate-form").addEventListener("submit", generateApiKey);

    // ✅ Load API keys immediately when the page loads
    document.addEventListener("DOMContentLoaded", fetchApiKeys);
</script>

</body>
</html>
