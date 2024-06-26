<?php

declare(strict_types=1);
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'        => ':attribute skal accepteres.',
    'active_url'      => ':attribute er ikke en gyldig URL.',
    'after'           => ':attribute skal være en dato efter :date.',
    'after_or_equal'  => ':attribute skal være en dato efter eller lig med :date.',
    'alpha'           => ':attribute må kun bestå af bogstaver.',
    'alpha_dash'      => ':attribute må kun bestå af bogstaver, tal og bindestreger.',
    'alpha_num'       => ':attribute må kun bestå af bogstaver og tal.',
    'array'           => ':attribute skal være et array.',
    'before'          => ':attribute skal være en dato før :date.',
    'before_or_equal' => ':attribute skal være en dato før eller lig med :date.',
    'between'         => [
        'numeric' => ':attribute skal være mellem :min - :max.',
        'file'    => ':attribute skal være mellem :min - :max kilobytes.',
        'string'  => ':attribute skal være mellem :min - :max tegn.',
        'array'   => ':attribute skal indeholde mellem :min - :max elementer.',
    ],
    'boolean'        => ':attribute skal være sandt eller falsk',
    'confirmed'      => ':attribute er ikke det samme som bekræftelsesfeltet.',
    'date'           => ':attribute er ikke en gyldig dato.',
    'date_equals'    => 'The :attribute must be a date equal to :date.',
    'date_format'    => ':attribute matcher ikke formatet :format.',
    'different'      => ':attribute og :other skal være forskellige.',
    'digits'         => ':attribute skal have :digits cifre.',
    'digits_between' => ':attribute skal have mellem :min og :max cifre.',
    'dimensions'     => ':attribute har forkerte billede dimensioner.',
    'distinct'       => ':attribute har en duplikatværdi.',
    'email'          => ':attribute skal være en gyldig e-mailadresse.',
    'exists'         => 'Det valgte :attribute er ugyldig.',
    'file'           => ':attribute skal være en fil.',
    'filled'         => ':attribute skal udfyldes.',
    'gt'             => [
        'numeric' => 'The :attribute skal være større end :value.',
        'file'    => 'The :attribute skal være større end :value kilobytes.',
        'string'  => 'The :attribute skal være større end :value tegn.',
        'array'   => 'The :attribute skal være mere end :value elementer.',
    ],
    'gte' => [
        'numeric' => 'The :attribute skal være større end eller lig med :value.',
        'file'    => 'The :attribute skal være større end eller lig med :value kilobytes.',
        'string'  => 'The :attribute skal være større end eller lig med :value tegn.',
        'array'   => 'The :attribute skal have :value items eller mere.',
    ],
    'image'    => ':attribute skal være et billede.',
    'in'       => 'Det valgte :attribute er ugyldig.',
    'in_array' => ':attribute eksisterer ikke i :other.',
    'integer'  => ':attribute skal være et heltal.',
    'ip'       => ':attribute skal være en gyldig IP adresse.',
    'ipv4'     => ':attribute skal være en gyldig IPv4 adresse.',
    'ipv6'     => ':attribute skal være en gyldig IPv6 adresse.',
    'json'     => ':attribute skal være en gyldig JSON streng.',
    'lt'       => [
        'numeric' => 'The :attribute skal være mindre end :value.',
        'file'    => 'The :attribute skal være mindre end :value kilobytes.',
        'string'  => 'The :attribute skal være mindre end :value tegn.',
        'array'   => 'The :attribute skal have mindre end :value elementer.',
    ],
    'lte' => [
        'numeric' => 'The :attribute skal være mindre eller lig med :value.',
        'file'    => 'The :attribute skal være mindre eller lig med :value kilobytes.',
        'string'  => 'The :attribute skal være mindre eller lig med :value tegn.',
        'array'   => 'The :attribute må ikke have mere end :value elementer.',
    ],
    'max' => [
        'numeric' => ':attribute skal være højest :max.',
        'file'    => ':attribute skal være højest :max kilobytes.',
        'string'  => ':attribute skal være højest :max tegn.',
        'array'   => ':attribute må ikke indeholde mere end :max elementer.',
    ],
    'mimes'     => ':attribute skal være en fil af typen: :values.',
    'mimetypes' => ':attribute skal være en fil af typen: :values.',
    'min'       => [
        'numeric' => ':attribute skal være mindst :min.',
        'file'    => ':attribute skal være mindst :min kilobytes.',
        'string'  => ':attribute skal være mindst :min tegn.',
        'array'   => ':attribute skal indeholde mindst :min elementer.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attribute skal være et tal.',
    'present'              => ':attribute skal være tilstede.',
    'regex'                => ':attribute formatet er ugyldigt.',
    'required'             => ':attribute skal udfyldes.',
    'required_if'          => ':attribute skal udfyldes når :other er :value.',
    'required_unless'      => ':attribute er påkrævet med mindre :other findes i :values.',
    'required_with'        => ':attribute skal udfyldes når :values er udfyldt.',
    'required_with_all'    => ':attribute skal udfyldes når :values er udfyldt.',
    'required_without'     => ':attribute skal udfyldes når :values ikke er udfyldt.',
    'required_without_all' => ':attribute skal udfyldes når ingen af :values er udfyldt.',
    'same'                 => ':attribute og :other skal være ens.',
    'size'                 => [
        'numeric' => ':attribute skal være :size.',
        'file'    => ':attribute skal være :size kilobytes.',
        'string'  => ':attribute skal være :size tegn lang.',
        'array'   => ':attribute skal indeholde :size elementer.',
    ],
    'starts_with' => ':attribute skal starte med et af følgende: :values',
    'string'      => ':attribute skal være en streng.',
    'timezone'    => ':attribute skal være en gyldig tidszone.',
    'unique'      => ':attribute er allerede taget.',
    'uploaded'    => ':attribute fejlene i uploaden.',
    'url'         => ':attribute formatet er ugyldigt.',
    'uuid'        => ':attribute skal være en gyldig UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
    ],
];
