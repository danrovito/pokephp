<?php

declare(strict_types=1);

namespace PokePHP;

final class HttpClient
{
    private \CurlHandle $curl;

    public function __construct(
        private string $url
    ) {
        $this->curl = curl_init();

        $connectionTimeout = 5;

        curl_setopt_array($this->curl, [
            CURLOPT_URL            => $url,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_CONNECTTIMEOUT => $connectionTimeout,
        ]);
    }

    public function __destruct()
    {
        curl_close($this->curl);
    }

    public function request(string $method = 'GET', array $header = [], array $data = []): string|bool
    {
        curl_setopt_array($this->curl, [
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER    => $header,
            CURLOPT_POSTFIELDS    => $data,
        ]);

        $response = curl_exec($this->curl);

        if (false === $response) {
            $exceptionMessage = curl_error($this->curl);

            $exceptionCode = curl_errno($this->curl);

            throw new \RuntimeException($exceptionMessage, $exceptionCode);
        }

        $httpCode = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);

        if ($httpCode !== 200) {
            return json_encode([
                'code'    => $httpCode,
                'message' => $data,
            ]);
        }

        return $response;
    }
}
