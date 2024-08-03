<?php

// ユニコード正規化関数
function normalize_path($path) {
    if (class_exists('Normalizer')) {
        return normalizer_normalize($path);
    }
    return $path;
}
    