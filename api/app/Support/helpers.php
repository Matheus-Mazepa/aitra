<?php

/**
 * All files in this folder will be included in the application.
 */

use Carbon\Carbon;

if (!function_exists('implode_with_comma')) {
    /**
     * Separar os ítens de uma array por vírgula.
     *
     * @param  string[]  $array  .
     * @param  string  $lastGlue
     * @param  string  $outputWhenEmpty
     * @return string
     */
    function implode_with_comma(
        array $array,
        string $lastGlue = ', ',
        string $outputWhenEmpty = ''
    ) {
        if (sizeof($array) == 0) {
            return $outputWhenEmpty;
        }

        if (sizeof($array) != 1) {
            $last = array_pop($array);
            $glued = implode(', ', $array);
            return $glued . $lastGlue . $last;
        }

        return implode(', ', $array);
    }
}

if (!function_exists('format_date')) {
    /**
     * Formata uma data
     *
     * @param  Carbon|string  $date  Date to format.
     * @param  string  $format  Format.
     * @param  string  $fromFormat  Origin format.
     * @return string
     */
    function format_date($date, $format = 'd/m/Y', $fromFormat = null)
    {
        return \App\Support\DateHelper::formatDate($date, $format, $fromFormat);
    }
}

if (!function_exists('format_of_date')) {
    /**
     * Retorna o formato corrente de 'date'
     *
     * @return string
     */
    function format_of_date()
    {
        return \App\Support\DateHelper::getDateFormat();
    }
}

if (!function_exists('format_of_datetime')) {
    /**
     * Retorna o formato corrente de 'datetime'
     *
     * @return string
     */
    function format_of_datetime()
    {
        return \App\Support\DateHelper::getDateTimeFormat();
    }
}

if (!function_exists('generate_date_range')) {
    /**
     * Dado uma data inicial e uma final, retorna todos os dias entre elas
     *
     * @param  Carbon  $start_date  Data inicial
     * @param  Carbon  $end_date  Data final
     * @return array
     */
    function generate_date_range(Carbon $start_date, Carbon $end_date)
    {
        return \App\Support\DateHelper::generateDateRange($start_date, $end_date);
    }
}

if (!function_exists('convert_date_interval')) {
    /**
     * Dado um intervalo em string, converte para uma array com os devidos formatos
     * para o banco de dados
     *
     * @param  string  $period
     * @param  string  $periodSeparator
     * @return array
     */
    function convert_date_interval($period, string $periodSeparator = '-')
    {
        return \App\Support\DateHelper::convertDateInterval($period, $periodSeparator);
    }
}

if (!function_exists('_m')) {
    /**
     * Retorna mensagens do arquivo 'flash' de tradução.
     *
     * @param  mixed  $key  Chave do caminho para acessar.
     * @param  string  $default  Mensagem padrão caso não encontre a mensagem.
     * @return string
     */
    function _m(string $key, string $default = null): string
    {
        return __('flash.' . $key);
    }
}

if (!function_exists('with_error')) {
    /**
     *  Caso exista algum erro para o campo passado como parâmetro, é retornada
     * a classe 'font-light shadow appearance-none border focus:outline-none focus:ring-1 focus:ring-primary focus:shadow-inner  rounded w-full py-2 px-3 text-gray-400-danger'.
     *
     * @param  string  $field  Nome do campo do formulário
     * @param  callable|string|null  $output
     * @return string
     */
    function with_error(string $field, $output = 'border-danger'): string
    {
        $errors = \Session::get('errors');

        if (empty($errors)) {
            return '';
        }

        return $errors->has($field) ? value($output) : '';
    }
}

if (!function_exists('mask')) {
    /**
     *  Aplica uma máscara à uma string.
     *
     * @param  string  $value  Valor a ser mascarado
     * @param  string  $mask  Máscara
     * @param  string  $mask_character  Caractere que representará os valores preenchíveis
     * @return string
     */
    function mask($value, $mask, $mask_character = '#')
    {
        $value = str_replace(" ", "", $value);
        for ($i = 0; $i < strlen($value); $i++) {
            $mask[strpos($mask, $mask_character)] = $value[$i];
        }

        return $mask;
    }
}

if (!function_exists('remove_mask_percent')) {

    /**
     * Remover tudo que não for número ou vírgula e substituir vírgula por ponto.
     * Retorna o valor formatado para o formato americano trocando pontos e vírgulas.
     * @param $value
     * @return string
     */
    function remove_mask_percent($value)
    {
        $value = preg_replace('/[^0-9,]/', '', $value);
        return str_replace([','], ['.'], $value);
    }
}

if (!function_exists('format_percent')) {

    /**
     * Remover tudo que não for número ou vírgula e substituir vírgula por ponto.
     * Retorna o valor formatado para o formato americano trocando pontos e vírgulas.
     * @param $value
     * @return string
     */
    function format_percent($value)
    {
        $value = floatval($value);
        return  number_format($value, 2, ',', '');
    }
}

if (!function_exists('current_user')) {
    /**
     * Retorna uma instância do usuário corrente.
     *
     * @return \App\Models\User
     */
    function current_user()
    {
        return auth()->user();
    }
}

if (!function_exists('apply_params')) {
    /**
     * Aplica argumentos em parâmetros de uma string
     *
     * @return string
     */
    function apply_params(string $string, array $params, $before = ':', $after = '')
    {
        $regex = '/' . $before . '[a-z_]+' . $after . '/';
        return preg_replace_array($regex, $params, $string);
    }
}

if (!function_exists('milliseconds')) {
    /**
     * Retorna o timestamp atual em milisegundos
     *
     * @return int
     */
    function milliseconds()
    {
        $microTime = explode(' ', microtime());
        return ((int) $microTime[1]) * 1000 + ((int) round($microTime[0] * 1000));
    }
}

if (!function_exists('strbool')) {
    /**
     * Retorna a string de um valor booleano.
     *
     * @param $value
     * @return string
     */
    function strbool(bool $value): string
    {
        return $value ? 'true' : 'false';
    }
}

if (!function_exists('is_valid_url')) {
    /**
     * Validate if param is a valid URL;
     *
     * @param  string  $uil
     * @return boolean
     */
    function is_valid_url(string $url)
    {
        return (bool) filter_var($url, FILTER_VALIDATE_URL);
    }
}
