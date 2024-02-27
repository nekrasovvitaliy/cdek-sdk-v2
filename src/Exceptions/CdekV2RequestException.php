<?php

/**
 * Copyright (c) Antistress.Store® 2021. All rights reserved.
 * See LICENSE.md for license details.
 *
 * @author Sergey Gusev
 */

namespace AntistressStore\CdekSDK2\Exceptions;

use Throwable;

class CdekV2RequestException extends CdekV2Exception
{
	/**
	 * @var string|null $errorCode  Error code
	 */
	public ?string $errorCode;

	/**
	 * @var string|null $errorMessage Error message
	 */
	public ?string $errorMessage;

	/**
	 * @param                   $message
	 * @param                   $code
	 * @param   Throwable|null  $previous
	 * @param   string|null     $errorCode
	 * @param   string|null     $errorMessage
	 */
	public function __construct(
		$message,
		$code = 0,
		Throwable $previous = null,
		?string $errorCode = null,
		?string $errorMessage = null
	)
	{
		parent::__construct($message, $code, $previous);

		// Save additional information
		$this->errorCode = $errorCode;
		$this->errorMessage = $errorMessage;
	}
}
