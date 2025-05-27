/* Categorias */
.categoria-box {
    margin-bottom: 40px;
}

.categoria-box h3 {
    background-color: #333;
    color: #44ff44;
    padding: 10px 15px;
    font-size: 1.3rem;
    border-left: 5px solid #44ff44;
}

/* Cards */
.cards-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 15px;
}

.card {
    background-color: #2a2a2a;
    padding: 20px;
    border-radius: 10px;
    border: 1px solid #444;
    box-shadow: 0 0 10px #111;
    transition: transform 0.2s, box-shadow 0.2s;
}

.card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0 15px #44ff44;
}

.card h4 {
    color: #88ff88;
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.card p {
    color: #ddd;
    margin-bottom: 8px;
    font-size: 0.95rem;
}

.card strong {
    color: #44ff44;
}

/* Responsivo */
@media (max-width: 600px) {
    .cards-container {
        grid-template-columns: 1fr;
    }
}
