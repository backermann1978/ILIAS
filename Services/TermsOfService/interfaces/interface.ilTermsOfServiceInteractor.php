<?php
/* Copyright (c) 1998-2012 ILIAS open source, Extended GPL, see docs/LICENSE */

/**
 * @author  Michael Jansen <mjansen@databay.de>
 * @version $Id$
 */
interface ilTermsOfServiceInteractor
{
	/**
	 * @param ilTermsOfServiceRequest $request
	 */
	public function invoke(ilTermsOfServiceRequest $request);
}
