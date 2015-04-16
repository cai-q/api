<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| 该 following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => ":attribute 应该被接收.",
	"active_url"           => ":attribute 不是一个合法的URL地址.",
	"after"                => ":attribute 应该在 :date 之后.",
	"alpha"                => ":attribute 应该只包含字母.",
	"alpha_dash"           => ":attribute 应只包含字母，数字，破折号.",
	"alpha_num"            => ":attribute 应只包含字母和数字.",
	"array"                => ":attribute 应该是一个数组.",
	"before"               => ":attribute 应该在 :date 之前.",
	"between"              => [
		"numeric" => ":attribute 应该在 :min 和 :max 之间.",
		"file"    => ":attribute 应该在 :min 和 :max kilobytes 之间.",
		"string"  => ":attribute 应该在 :min 和 :max 字符之间.",
		"array"   => ":attribute 应该包含 :min 到 :max 个元素.",
	],
	"boolean"              => ":attribute 域应该是 true 或 false 之一.",
	"confirmed"            => ":attribute 确认字段不与前者匹配.",
	"date"                 => ":attribute 不是一个合法的日期.",
	"date_format"          => ":attribute 不符合格式 :format.",
	"different"            => ":attribute 和 :other 应该不同.",
	"digits"               => ":attribute 应该等于 :digits.",
	"digits_between"       => ":attribute 应该是 :min 和 :max 之间的数字.",
	"email"                => ":attribute 应该是一个有效的email地址.",
	"filled"               => ":attribute 域是必填的.",
	"exists"               => "选中的 :attribute 不合法.",
	"image"                => ":attribute 应该是一个图像   .",
	"in"                   => "选中的 :attribute 不合法.",
	"integer"              => ":attribute 应该是一个整数.",
	"ip"                   => ":attribute 应该是一个合法的IP地址.",
	"max"                  => [
		"numeric" => ":attribute 不能大于 :max.",
		"file"    => ":attribute 不能大于 :max kilobytes.",
		"string"  => ":attribute 不能包含多于 :max 个字符.",
		"array"   => ":attribute 不能包含多于 :max 个元素.",
	],
	"mimes"                => ":attribute 应该是一个 :values 类型的文件.",
	"min"                  => [
		"numeric" => ":attribute 应该至少是 :min.",
		"file"    => ":attribute 应该至少是 :min kilobytes.",
		"string"  => ":attribute 应该包含至少 :min 个字符.",
		"array"   => ":attribute 应该包含至少 :min 个元素.",
	],
	"not_in"               => "选中的 :attribute 不合法.",
	"numeric"              => ":attribute 应该是一个数字.",
	"regex"                => ":attribute 格式不正确.",
	"required"             => ":attribute 是必填的.",
	"required_if"          => "当 :other 是 :value, :attribute 域是必填的.",
	"required_with"        => ":attribute field is required when :values is present.",
	"required_with_all"    => ":attribute field is required when :values is present.",
	"required_without"     => ":attribute field is required when :values is not present.",
	"required_without_all" => ":attribute field is required when none of :values are present.",
	"same"                 => ":attribute and :other 应该 match.",
	"size"                 => [
		"numeric" => ":attribute 应该是 :size.",
		"file"    => ":attribute 应该是 :size kilobytes.",
		"string"  => ":attribute 应该包含 :size 个字符.",
		"array"   => ":attribute 应该包含 :size 个元素.",
	],
	"unique"               => ":attribute 已被使用过了.",
	"url"                  => ":attribute 格式不正确.",
	"timezone"             => ":attribute 应该是一个有效的时区.",

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
	| 该 following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [],

];
