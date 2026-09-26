<?php
/**
 * Exemple de backend de synchronisation.
 * À déployer sur un serveur privé (jamais sur GitHub Pages).
 * Les secrets OAuth Gmail doivent rester en variables d'environnement.
 */
header('Content-Type: application/json; charset=utf-8');
if (PHP_SAPI !== 'cli') {
    $secret = getenv('SYNC_SECRET');
    $provided = $_SERVER['HTTP_X_SYNC_SECRET'] ?? '';
    if (!$secret || !hash_equals($secret, $provided)) {
        http_response_code(401);
        echo json_encode(['error' => 'unauthorized']);
        exit;
    }
}
echo json_encode([
    'status' => 'backend-template',
    'message' => 'Configurer Gmail OAuth côté serveur puis publier un snapshot CRM non sensible.'
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
