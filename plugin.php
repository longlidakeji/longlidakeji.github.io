<?php



function gettoken()    // ===============获取TOKEN===============
{
    // 初始化cURL会话
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.starstream.club/user/auth/device/login/"); // 目标URL
    curl_setopt($ch, CURLOPT_POST, true); // 发送POST请求
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('deviceCode' => 'Fef44be4f447e255'))); // POST数据
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回响应而不是输出
    $response = curl_exec($ch);

    // 检查是否有错误发生
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    }

    // 解析响应内容(获取TOKEN)
    $response = json_decode($response);
    $token = $response->data->token; // $token = "73a89fac5b091ede1de57d814b9706fe";

    // 关闭cURL会话
    curl_close($ch);

    return $token;
}


function getlist($page, $sort_expression_id, $genres_ids)    // ===============获取视频列表===============
{
    $token = gettoken();

    // 初始化cURL会话
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.starstream.club/videos/lst"); // 目标URL
    curl_setopt($ch, CURLOPT_POST, true); // 发送POST请求
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('token' => $token, 'page' => $page, 'limit' => '239', 'sort_expression_id' => $sort_expression_id, 'genres_ids' => $genres_ids))); // POST数据
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回响应而不是输出
    $response = curl_exec($ch);

    // 检查是否有错误发生
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    }

    // 关闭cURL会话
    curl_close($ch);

    return $response;
}



function getinfo($id)    // ===============获取视频详情===============
{
    $token = gettoken();

    // 初始化cURL会话
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.starstream.club/videos/get"); // 目标URL
    curl_setopt($ch, CURLOPT_POST, true); // 发送POST请求
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('token' => $token, 'id' => $id))); // POST数据
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回响应而不是输出
    $response = curl_exec($ch);

    // 检查是否有错误发生
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    }

    // 关闭cURL会话
    curl_close($ch);

    return $response;
}



function search($page, $sort_expression_id, $title)    // ===============搜索视频===============
{
    $token = gettoken();

    // 初始化cURL会话
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.starstream.club/videos/lst"); // 目标URL
    curl_setopt($ch, CURLOPT_POST, true); // 发送POST请求
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('token: ' . $token)); //设置请求头
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('page' => $page, 'limit' => '239', 'sort_expression_id' => $sort_expression_id, 'title' => $title))); // POST数据
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 返回响应而不是输出
    $response = curl_exec($ch);

    // 检查是否有错误发生
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    }

    // 关闭cURL会话
    curl_close($ch);

    return $response;
}
