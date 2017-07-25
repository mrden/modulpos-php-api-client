<?php
/**
 * This file is part of Modulpos package.
 *
 * @author Anton Kartsev <anton@alarm.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Bigperson\ModulposApiClient\Contracts;

/**
 * Interface ClientInterface
 *
 * @package Bigperson\ModulposApiClient\Contracts
 */
interface ClientInterface
{
    /**
     * Опрос готовности сервиса фискализации
     *
     * @return array ['status', 'statusDateTime']
     */
    public function getStatusFiscalService();

    /**
     * Отправка данных чека на сервер фискализации (создание документа)
     *
     * @see http://modulkassa.ru/upload/medialibrary/abb/api-avtomaticheskoy-fiskalizatsii-chekov-internet_magazinov-_ver.1.2_.pdf
     *
     * @param array $checkData
     *
     * @return array
     */
    public function sendCheck(array $checkData);

    /**
     * Проверка статуса документа
     *
     * @param $documentId
     *
     * @return array
     */
    public function getStatusDocumentById($documentId);
}